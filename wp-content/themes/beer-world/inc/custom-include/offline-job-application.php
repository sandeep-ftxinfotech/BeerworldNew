<?php
/**
 * Retrieve customer’s data from the database
 *
 * @param int $per_page
 * @param int $page_number
 *
 * @return mixed
 */
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Custom_List_Table extends WP_List_Table
{
    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();
        $data = $this->table_data();
        //usort( $data, array( &$this, 'sort_data' ) );
        $perPage = 10;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);
        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );
        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);
        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }
    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
            'full_name'             =>  'Full Name',
            'phone_number'          =>  'Phone Number',
            'email_address'         =>  'Email Address',
            'position_sought'       =>  'Position Sought',
            'action'                =>  'Action',
        );
        return $columns;
    }
    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array();
    }
    /**
     * Define the sortable columns
     *
     * @return Array
     */
    public function get_sortable_columns()
    {
        return array('id' => array('id', false));
    }
    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data()
    {
        $data = array();

        global $wpdb;

        $table_name = $wpdb->prefix . "online_application_form";

        if( $_POST['s'] != NULL )
        {       
            $search = trim($_POST['s']);
           
            $rows = $wpdb->get_results($wpdb->prepare("SELECT * FROM ".$table_name." WHERE application_type = 'Offline Job Application' AND `application_content` LIKE '%%%s%%'", $search, $search));         
        }
        else
        {
            $rows    =   $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE application_type = 'Offline Job Application' ORDER BY application_id DESC " );
        }

        

        foreach ($rows as $values) 
        {   
            $unserialized_content   =   maybe_unserialize($values->application_content);

            $data[]     =   array(
                                    'full_name'             => $unserialized_content["first_name"]. " ".$unserialized_content["middle_name"]. " ".$unserialized_content["last_name"],
                                    'phone_number'          => $unserialized_content["phone_number"],
                                    'email_address'         => $unserialized_content["email_address"],
                                    'position_sought'       => $unserialized_content["postition_sought"],
                                    'action'                => '<a href="'.admin_url('admin.php?page=offline_job_application').'&operation=view&view_id='.$values->application_id.'" style="color:#228B22; font-weight: bold; font-size: 12px;">View Details</a>',
            );
        }
        return $data;
    }
    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'full_name':
            case 'phone_number':
            case 'email_address':
            case 'position_sought':
            case 'action':
                return $item[ $column_name ];
            default:
                return print_r( $item, true ) ;
        }
    }
    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    /*private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = '';
        $order = '';
        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }
        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }
        $result = strcmp( $a[$orderby], $b[$orderby] );
        if($order === 'asc')
        {
            return $result;
        }
        return -$result;
    }*/
    public function search_box( $text, $input_id ) { ?>
        <form method="post">
        <p class="search-box">
          <label class="screen-reader-text" for="<?php echo $input_id ?>"><?php echo $text; ?>:</label>
          <input type="search" id="<?php echo $input_id ?>" name="s" value="<?php _admin_search_query(); ?>" />
          <?php submit_button( $text, 'button', false, false, array('id' => 'search-submit') ); ?>
      </p>
  </form>
    <?php }
}

?>