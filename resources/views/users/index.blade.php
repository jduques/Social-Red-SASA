@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 p-0" >
			<div class="card rgba-grey-slight z-depth-2">
				<div class="card-body p-2">
			        <div class="card z-depth-2">
				        <div class="col-12">
			        		<div class="row card-header bg-primary py-1 px-0">
								<h5 class="mb-0 align-self-center ta-cl">
									<a id="link1" href="javascript:history.go(-1)" class="btn btn-outline-light py-1 m-1 ml-2 d-none d-md-inline-block"><i class="fas fa-arrow-left text-yellow"></i></a>
									<span class="pl-2">Usuarios</span>
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
										<th class="text-muted small px-3 py-2">id</th>
										<th class="text-muted small">Nombre</th>
										<th class="text-muted small">Correo</th>
										<th class="text-muted small">Teléfono</th>
										<th class="text-muted small">Website</th>
										<th class="text-muted small">Compañía</th>
										<th></th>
									</tr>
								</thead>
								<tbody>													
									@foreach($users as $key => $user)
									<tr>
										<td class="text-center align-middle">
											{{$user->id}}
										</td>
										<td class="align-middle h6">
											<span data-toggle="popover" data-trigger="hover" data-html="true" data-placement="bottom" title="Dirección" data-content="{{$user->address->street . ' - ' . $user->address->suite . ' - ' . $user->address->city . ' - ' . $user->address->zipcode . ' ( Lat: ' . $user->address->geo->lat . ' - Long: ' . $user->address->geo->lng . ' )'}}"><i class="fa fa-street-view text-success mr-1"></i></span>
											<a href="/posts/{{$user->id}}/{{Str::slug($user->name . '-' . $user->username)}}">{{$user->name . ", " . $user->username}}</a>
										</td>
										<td class="d-none d-lg-table-cell pl-3">
											{{$user->email}}
										</td>
										<td class="align-middle">
											{{$user->phone}}
										</td>
										<td class="align-middle">
											{{$user->website}}
										</td>
										<td class="align-middle">
											{{$user->company->name}}
											<div class="d-inline float-right">
												<span data-toggle="popover" data-trigger="hover" data-html="true" data-placement="bottom" title="Eslogan" data-content="{{$user->company->catchPhrase}}">
													<i class="fas fa-registered pr-2 text-info"></i>
												</span>
												<span data-toggle="popover" data-trigger="hover" data-html="true" data-placement="bottom" title="Bs" data-content="{{$user->company->bs}}">
													<i class="fa fa-info pr-2 text-info"></i>
												</span>
											</div>											
										</td>
										<td class="text-center align-middle">
											<div class="btn-group py-1 px-3">
												<button class="btn btn-sm btn-outline-primary" data-toggle="dropdown">
										  		<i class="fa fa-cog fa-xs dropdown-toggle">&nbsp;</i></button>
												<div class="dropdown-menu">
												    <a class="dropdown-item" href="/posts/{{$user->id}}"><i class="fa fa-history text-primary mr-2" aria-hidden="true"></i>Publicaciones</a>
												    <div class="dropdown-divider"></div>
												    <a class="dropdown-item" href="#"><i class="fa fa-edit text-success mr-2" aria-hidden="true"></i>Editar usuario</a>
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