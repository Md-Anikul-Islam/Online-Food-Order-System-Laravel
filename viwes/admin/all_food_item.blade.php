@extends('pages.admin_home_contant')
@section('admin_content')
	
			
<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
			<p class="alert-success">
					<?php
					$messege=Session::get('messege');
					     if($messege)
							 {
								 echo $messege;
								 Session::put('messege',null);
							 }
					
					?>
			</p>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					   <table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Item Id</th>
								  <th>Item Name</th>
								  <th>Item Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  


						  @foreach($all_item_info as $v_item)

						  <tbody>
							<tr>
								<td>{{$v_item->item_id}}</td>
								<td class="center">{{$v_item->item_name}}</td>
								<td class="center">{{$v_item->item_description}}</td>
								
								<td class="center">
								@if($v_item->publication_status==1)
									<span class="label label-success">Active</span>
								@else
								    <span class="label label-danger">Unactive</span>
								@endif
								</td>

								<td class="center">
								@if($v_item->publication_status==1)
									<a class="btn btn-success" href="{{URL::to('/active_item/'.$v_item->item_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
								@else
								    <a class="btn btn-danger" href="{{URL::to('/unactive_item/'.$v_item->item_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
								@endif





									<a class="btn btn-danger" href="{{URL::to('/delete-item/'.$v_item->item_id)}}" id="delete">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
                                   
						 </tbody>

                        @endforeach




						 </table>  
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
 

@endsection()