<?php

/*

Template name: Welcome Template 
*/

get_header();
?>
    <div id="main">
		<div class="wrap">			
			<div id="primary" class="content-area one-column">
            	<div id="content">
                	<div id="welcomescreen" style="background:url(<?php echo get_template_directory_uri();  ?>/images/bgi/mainbannerbg.jpg) no-repeat center center / cover;">
                        <div class="welcomescreen-wrap">
                        	<figure id="splashlogo"><img src="<?php echo get_template_directory_uri();  ?>/images/splashlogo.png" alt="BEER World"></figure>
                        	<div class="welcomescreen-content">
                            	<h1>You must be 21 Years old to visit this site.</h1>
                                <div class="verifyage">
                                    <span class="verifyagetitle">Please verify your age</span>
                                    <div class="customselectgrouop">
                                    	<div class="custom-select">
                                            <select>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option> 
                                                <option>April</option>                                                
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option> 
                                                <option>August</option>                                                
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option> 
                                                <option>December</option>
                                            </select>
                                        </div><!--/.custom-select-->                                        
                                        <div class="custom-select">
                                            <select>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option> 
                                                <option>04</option>                                                
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option> 
                                                <option>08</option>                                                
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option> 
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option> 
                                                <option>16</option>                                                
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option> 
                                                <option>20</option>                                                
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option> 
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option> 
                                                <option>28</option>                                                
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div><!--/.custom-select-->                                        
                                        <div class="custom-select">
                                            <select>
                                                <option>1998</option>
                                                <option>1997</option>
                                                <option>1996</option> 
                                                <option>1995</option>                                                
                                                <option>1994</option>
                                                <option>1993</option>
                                                <option>1992</option> 
                                                <option>1991</option>                                                
                                                <option>1990</option>
                                                <option>1989</option>
                                                <option>1988</option> 
                                                <option>1987</option>
                                                <option>1986</option>
                                                <option>1985</option>
                                                <option>1984</option> 
                                                <option>1983</option>                                                
                                                <option>1982</option>
                                                <option>1981</option>
                                                <option>1980</option> 
                                                <option>1979</option>                                                
                                                <option>1978</option>
                                                <option>1977</option>
                                                <option>1976</option> 
                                                <option>1975</option>
                                                <option>1974</option>
                                                <option>1973</option>
                                                <option>1972</option> 
                                                <option>1971</option>                                                
                                                <option>1970</option>
                                            </select>
                                        </div><!--/.custom-select-->
                                    </div><!--/.customselectgrouop-->
                                    <div class="checkbox">
                                        <label for="remember-checkbox">
                                            <input type="checkbox" id="remember-checkbox">
                                            <em class="input-helper"></em>
                                            <span>Remember Me</span>
                                        </label>
                                    </div>
                                </div><!--/.verifyage-->
                            </div><!--/.welcomescreen-content-->
                            <a href="#wrapper" class="button btn-lg btn-outline explorebtn">Enter Site</a>
                        </div><!--/.welcomescreen-wrap-->
                    </div><!--/#welcomescreen-->
                </div><!--/#content-->
			</div><!--/#primary-->
        </div><!--/.wrap-->
	</div><!--/#main-->
<?php
get_footer();