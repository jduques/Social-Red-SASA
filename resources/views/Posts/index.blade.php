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
									<span class="pl-2">Publicaciones de: </span>
									<span class="text-yellow">{{str_replace("-", " ", ucfirst($name))}}</span>
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
										<th class="text-muted small">Título/Contenido</th>
										<th></th>
									</tr>
								</thead>
								<tbody>													
									@foreach($posts as $key => $post)
									<tr>
										<td class="text-center align-middle">
											{{$post->id}}
										</td>
										<td class="py-2">
											<div class="col-12 h4">
												<i class="fa fa-thumbtack fa-sm text-orange mr-2"></i>
												<a href="/posts/{{$post->id}}/{{Str::slug($post->title)}}/comments">{{substr(ucfirst($post->title), 0, 55)}}</a>
											</div>
											<div class="col-12">
												<textarea class="form-control" readonly>{{str_replace(array("\n\r", "\n", "\r"), " ", ucfirst($post->body))}}</textarea>
											</div>
										</td>
										<td class="text-center align-middle">
											<div class="btn-group py-1">
												<button class="btn btn-sm btn-outline-primary" data-toggle="dropdown">
										  		<i class="fa fa-cog fa-xs dropdown-toggle">&nbsp;</i></button>
												<div class="dropdown-menu">
												    <a class="dropdown-item" href="/posts/{{$post->id}}/comments"><i class="fa fa-history text-primary mr-2"></i>Publicaciones</a>
												    <div class="dropdown-divider"></div>
												    <a class="dropdown-item" href="#"><i class="fa fa-edit text-success mr-2"></i>Editar usuario</a>
												</div>
											</div>
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

<div class="modal" id="modal-0">
	<div class="modal-dialog modal-dialog-centered">
		<div class="col-12 d-flex justify-content-center">		
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