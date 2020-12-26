<?php
include "check_session.php";
?>
<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer_orders.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Customer Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">
            <i class="fas fa-fw fa-list-ol"></i>
            <span>Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_items.php">
            <i class="fas fa-fw fa-table"></i>
            <span>All Items</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_product.php">
            <i class="fas fa-fw fa-plus"></i>
            <span>Add Products</span>
          </a>
        </li>
       <!-- <li style="background-color: #212529" class="list-group-item nav-item">
		 <a style="color:darkgray" data-toggle="collapse" href="#collapse1">
            <i class="fas fa-fw fa-folder"></i>
				 <span>Product List</span>
           	  	 <i class="fas fa-fw fa-caret-down"></i>
         </a>
         <ul style="background-color: #212529" >
		  <div id="collapse1" class="panel-collapse collapse">
        	<a data-toggle="collapse" href="#collapse2"><b>FURNITURE</b></a>
         	 <div id="collapse2" class="panel-collapse collapse">
         	  <li>
         	   <ul class="list-group">
          	    <li class="list-group-item">
          		  <a data-toggle="collapse" href="#collapse3"><b>Living Room</b></a>
      			  <div id="collapse3" class="panel-collapse collapse">
				 	<ul class="list-group">
        				<li class="list-group-item"><a href="index7fa3.html?route=product/category&amp;path=18"><span class="title">Sofa Sets</span></a></li>
						<li class="list-group-item"><a href="indexc957.html?route=product/category&amp;path=24"><span class="title">Sofa Cum Beds</span></a></li>
						<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Seating</span></a></li>
						<li class="list-group-item"><a href="index8cc5.html?route=product/category&amp;path=29"><span class="title">Chairs</span> </a></li>
						<li class="list-group-item"><a href="index8122.html?route=product/category&amp;path=34"><span class="title">Tables</span></a></li>
        			</ul>
				  </div>
			    </li>
				
      		    <li class="list-group-item accordion-group">
			      <a data-toggle="collapse" href="#collapse4"><b>Bedroom</b></a>
      			    <div id="collapse4" class="panel-collapse collapse">
        			   <ul class="list-group">
        				   <li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">All Beds</span></a></li>
						   <li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Single size Beds</span></a></li>
						   <li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Double size Beds</span></a></li>
						   <li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">King Size Beds</span></a></li>
					       <li class="list-group-item"><a href="index286f.html?route=product/category&amp;path=41"><span class="title">Beds With Storage</span></a></li>
						   <li class="list-group-item"><a href="indexabf4.html?route=product/category&amp;path=42"><span class="title">Kids Bed</span></a></li>
						   <li class="list-group-item"><a href="index81d2.html?route=product/category&amp;path=49"><span class="title">Mattresses</span></a></li>
					   	   <li class="list-group-item"><a href="index81d2.html?route=product/category&amp;path=49"><span class="title">Dressing Tables</span></a></li>
					       <li class="list-group-item"><a href="index81d2.html?route=product/category&amp;path=49"><span class="title">Bedside Tables</span></a></li>					
        			   </ul>
				    </div>
       		    </li>
       		    
       		    <li class="list-group-item accordion-group">
			      <a data-toggle="collapse" href="#collapse5"><b>Dining Room</b></a>
      			    <div id="collapse5" class="panel-collapse collapse">
        			   <ul class="list-group">
        				   <li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">All Dining Sets</span></a></li>
						   <li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">4 Seater Dining Sets</span></a></li>
						   <li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">6 Seater Dining Sets</span></a></li>
						   <li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">8 Seater Dining Sets</span></a></li>
						   <li class="list-group-item"><a href="index286f.html?route=product/category&amp;path=41"><span class="title">Dining Tables</span></a></li>
						   <li class="list-group-item"><a href="indexabf4.html?route=product/category&amp;path=42"><span class="title">Dining Chairs</span></a></li>
						   <li class="list-group-item"><a href="index81d2.html?route=product/category&amp;path=49"><span class="title">Dining Benches</span></a></li>
					   	    <li class="list-group-item"><a href="index81d2.html?route=product/category&amp;path=49"><span class="title">Storage</span></a></li>					
        			   </ul>
				    </div>
       		    </li>
        	    <li class="list-group-item accordion-group">
			     <a data-toggle="collapse" href="#collapse6"><b>Study & Office</b></a>
      			    <div id="collapse6" class="panel-collapse collapse">
        			   <ul class="list-group">
        				   <li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Book Shelves</span></a></li>
						   <li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Magazine & File Racks</span></a></li>
						   <li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Study Tables</span></a></li>
						   <li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">Office Tables</span></a></li>
						   <li class="list-group-item"><a href="index286f.html?route=product/category&amp;path=41"><span class="title">Office Chairs</span></a></li>
						   <li class="list-group-item"><a href="indexabf4.html?route=product/category&amp;path=42"><span class="title">Study Chairs</span></a></li>		
        			   </ul>
				    </div>
   			    </li>
       		    <li class="list-group-item accordion-group">
			     <a data-toggle="collapse" href="#collapse7"><b>Outdoor</b></a>
      			   <div id="collapse7" class="panel-collapse collapse">
        			   <ul class="list-group">
        				   <li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Swings</span></a></li>
						   <li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Outdoor Chairs</span></a></li>
						   <li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Outdoor Tables</span></a></li>				
        			   </ul>
				   </div>
       		    </li>
       		    <li class="list-group-item accordion-group">
			     <a data-toggle="collapse" href="#collapse8"><b>Wardrobes</b></a>
      			   <div id="collapse8" class="panel-collapse collapse">
        			   <ul class="list-group">
        				   <li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">All Wardrobes</span></a></li>
						   <li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">2 Door Wardrobes</span></a></li>
						   <li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">3 Door Wardrobes</span></a></li>
						   <li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">4 Door Wardrobes</span></a></li>
						   <li class="list-group-item"><a href="index286f.html?route=product/category&amp;path=41"><span class="title">Sliding Door Wardrobes</span></a></li>
					   </ul>
				   </div>
       		    </li>			 
		       </ul>
         	  </li>
             </div><br>
			  <a data-toggle="collapse" href="#collapse8"><b>H FURNISHINGS</b></a>
             <div id="collapse8" class="panel-collapse collapse">
        			<li>
        				<ul class="list-group">
        					<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse9"><b>Bed Sheets</b></a>
      							<div id="collapse9" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="index7fa3.html?route=product/category&amp;path=18"><span class="title">All Bed Sheets</span></a></li>
							 				<li class="list-group-item"><a href="indexc957.html?route=product/category&amp;path=24"><span class="title">King Size Bed Sheets</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Single Bed Sheets</span></a></li>
							 				<li class="list-group-item"><a href="index8cc5.html?route=product/category&amp;path=29"><span class="title">Fitted Bed Sheets</span> </a></li>
							 				<li class="list-group-item"><a href="index8122.html?route=product/category&amp;path=34"><span class="title">Double Bed Sheets</span></a></li>				
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse10"><b>Bedding</b></a>
      							<div id="collapse10" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Bed Covers</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Conforters</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">A/C Quilts & Blankets</span></a></li>
											<li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">Quilts /Blankets</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse11"><b>Pillows & Covers</b></a>
      							<div id="collapse11" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Bed Pillows</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Pillow Covers</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Covers & Inserts</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse12"><b>Bath Essentials</b></a>
      							<div id="collapse12" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Towels</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Bath Mats & Rugs</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Bath Robes</span></a></li>
											<li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">Shower Curtains</span></a></li>	
										</ul>
								</div>
       						</li>
        				</ul>	
        			</li>
      		      </div>
      		  <a data-toggle="collapse" href="#collapse13"><b>HOME DECOR</b></a>
             <div id="collapse13" class="panel-collapse collapse">
        			<li>
        				<ul class="list-group">
        					<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse14"><b>Wall Decor</b></a>
      							<div id="collapse14" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="index7fa3.html?route=product/category&amp;path=18"><span class="title">Paintings</span></a></li>
							 				<li class="list-group-item"><a href="indexc957.html?route=product/category&amp;path=24"><span class="title">Wall Art</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Wall Accents</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse15"><b>Candles & Fragrances</b></a>
      							<div id="collapse15" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Candles</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Candle Holders</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Home Fragrances</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse16"><b>Others</b></a>
      							<div id="collapse16" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Pots & Planters</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Lamps & Lightning</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Showpieces</span></a></li>
					   						<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Clocks</span></a></li>
										</ul>
								</div>
       						</li>
        				</ul>	
        			</li>
      		      </div>
      		  <a data-toggle="collapse" href="#collapse17"><b>TABLEWARE</b></a>
             <div id="collapse17" class="panel-collapse collapse">
        			<li>
        				<ul class="list-group">
        					<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse18"><b>Cofee & Tea</b></a>
      							<div id="collapse18" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="index7fa3.html?route=product/category&amp;path=18"><span class="title">Cofee & Tea Accessories</span></a></li>
							 				<li class="list-group-item"><a href="indexc957.html?route=product/category&amp;path=24"><span class="title">Mugs Cups</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Cofee & Tea sets</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Saucers</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item accordion-group">
								<a data-toggle="collapse" href="#collapse19"><b>Serving</b></a>
      							<div id="collapse19" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Candles</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Candle Holders</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Home Fragrances</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse20"><b>Table Essentials</b></a>
      							<div id="collapse20" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Table Cloths</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Napkins & Holders</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Showpieces</span></a></li>
					   						
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse21"><b>Others</b></a>
      							<div id="collapse21" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Dinners Sets</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Trays</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Plates</span></a></li>
											<li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">Bowls</span></a></li>					
										</ul>
								</div>
       						</li>
        				</ul>	
        			</li>
      		      </div>
      		  <a data-toggle="collapse" href="#collapse22"><b>KITCHENWARE</b></a>
             <div id="collapse22" class="panel-collapse collapse">
        			<li>
        				<ul class="list-group">
        					<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse23"><b>Kitchen Storage</b></a>
      							<div id="collapse23" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="index7fa3.html?route=product/category&amp;path=18"><span class="title">Food Storage</span></a></li>
							 				<li class="list-group-item"><a href="indexc957.html?route=product/category&amp;path=24"><span class="title">Kitchen Organizers</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Containers</span></a></li>
							 				<li class="list-group-item"><a href="index1647.html?route=product/category&amp;path=25"><span class="title">Thermoware</span></a></li>
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse24"><b>Kitchen Tools & Linen</b></a>
      							<div id="collapse24" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Cooking Tools</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Preparation Tools</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Kitchen Gears</span></a></li>
					   						<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Kitchen Linen</span></a></li>					
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse25"><b>Appliances</b></a>
      							<div id="collapse25" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Chimney</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Oven /Microwave</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Cooktops & Burners</span></a></li>
					   						<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Cooking</span></a></li>	
										</ul>
								</div>
       						</li>
       						<li class="list-group-item">
								<a data-toggle="collapse" href="#collapse26"><b>Others</b></a>
      							<div id="collapse26" class="panel-collapse collapse">
        								<ul class="list-group">
        									<li class="list-group-item"><a href="indexb152.html?route=product/category&amp;path=17"><span class="title">Cleaning</span></a></li>
											<li class="list-group-item"><a href="index98dc.html?route=product/category&amp;path=20"><span class="title">Laundry</span></a></li>
											<li class="list-group-item"><a href="index68ea.html?route=product/category&amp;path=33"><span class="title">Dustbins</span></a></li>
											<li class="list-group-item"><a href="indexdf98.html?route=product/category&amp;path=38"><span class="title">Shower Curtains</span></a></li>	
										</ul>
								</div>
       						</li>
        				</ul>	
        			</li>
      		      </div>		
             </div>
	     </ul>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogopt.php">
            <i class="fas fa-fw fa-rss"></i>
            <span>Blog</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">
            <i class="fas fa-fw fa-list-ol"></i>
            <span>Reports</span>
          </a>
        </li>
      </ul>