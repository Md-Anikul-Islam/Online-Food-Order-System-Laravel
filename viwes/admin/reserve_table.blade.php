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
								  <th>Reservetion Id</th>
								  <th>Reservetion Name</th>
                                  <th>Reservetion Email</th>
								  <th>Reservetion Phone</th>
								  <th>Reservetion Time</th>
                                  <th>Reservetion msg</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  


						  @foreach($all_reserve_info as $v_reserve)

						  <tbody>
							<tr>
								<td>{{$v_reserve->id}}</td>
								<td class="center">{{$v_reserve->name}}</td>
								<td class="center">{{$v_reserve->email}}</td>
                                <td class="center">{{$v_reserve->phone}}</td>
                                <td class="center">{{$v_reserve->datepicker}}</td>
                                <td class="center">{{$v_reserve->message}}</td>
								
								

								<td class="center">
									<a class="btn btn-danger" href="{{URL::to('/delete-reserve/'.$v_reserve->id)}}" id="delete">
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