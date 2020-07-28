@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-10 p-0" >
			<div class="card rgba-grey-slight z-depth-2">
				<div class="card-body p-2">
			        <div class="card z-depth-2">
				        <div class="col-12">
			        		<div class="row card-header bg-primary py-1 px-0">
								<h5 class="mb-0 align-self-center ta-cl">
									<a id="link1" href="javascript:history.go(-1)" class="btn btn-outline-light py-1 m-1 ml-2 d-none d-md-inline-block"><i class="fas fa-arrow-left text-yellow"></i></a>
									<span class="pl-2">Comentarios de: </span>
									<span class="text-yellow">{{str_replace("-", " ", ucfirst($title))}}</span>
								</h5>
					        	<hr>
					        	<div class="col-sd-8 pl-1 ta-cr mr-2 align-self-center">
					        	</div>
				        	</div>						        	
			        	</div>
			            <div class="card-body p-2">
			            <div class="table-responsive-xl">
							<table id="equipos" class="table table-hover table-striped table-bordered dt-responsive nowrap" style="width: 100%">
								<thead align="center">
									<tr>
										<th class="text-muted small py-2 px-3">id</th>
										<th class="text-muted small">Nombre/Correo/Contenido</th>
										<th class="px-3"></th>
									</tr>
								</thead>
								<tbody>													
									@foreach($comments as $key => $comment)
									<tr>
										<td  class="text-center align-middle">
											{{$comment->id}}
										</td>
										<td class="py-2">
											<div class="col-12 h4">
												<i class="fa fa-user fa-sm text-success mr-2"></i>
												{{substr(ucfirst($comment->name), 0, 30)}}
												<span class="h6">( <i class="fa fa-envelope fa-sm text-primary mr-1"></i>	{{ucfirst($comment->email)}} )</span>
											</div>
											<div class="col-12">
												<textarea class="form-control" readonly>{{str_replace(array("\n\r", "\n", "\r"), " ", ucfirst($comment->body))}}</textarea>
											</div>
										</td>
										<td class="text-center align-middle">
											<a href="#"><i class="fa fa-trash-alt text-danger"></i></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer')
@endsection

@section('js')

<script>

	$(document).ready(function () {
		$('[data-toggle="tooltip"]').tooltip()
		$('[data-toggle="popover"]').popover();
		$('#equipos').DataTable();
	});
	
</script>

 @endsection