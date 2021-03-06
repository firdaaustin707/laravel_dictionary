
@extends('layouts.page')

@section('content')
	
	<section class="section section-banner py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
					
					<h4 class="text-white mb-0">Cari Arti Kata</h4>
					

					
				</div>
			</div>

		

			
		</div>
	</section>
	
	<div class="section py-5">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<form method="GET" action="{{route('page.words')}}">


						<div class="form-group">
							{{-- <label for="exampleInputEmail1">Cari Kata</label> --}}
							<div class="input-group input-group-lg">

								<input type="text" name="keyword" id="keyword" class="form-control border-0" placeholder="Cari Kata" aria-label="Cari Kata" aria-describedby="button-addon1" value="{{old('keyword', $request->get('keyword'))}}">

								<div class="input-group-append">
									<button class="btn btn-primary border-0" type="submit" id="button-addon1"><i class="fa fa-search"></i></button>
								</div>
								
							</div>
							@if($errors->has('keyword'))
								<p class="text-white mt-2"><small>{{$errors->first('keyword')}}</small></p>
							@endif
						</div>
					</form>
					
				

					
					
					@if(count($words) > 0)
						<div class="card mb-4 border-light">
						
							<div class="list-group list-group-flush">
								@foreach($words as $word)
									
									<a href="{{route('page.word', $word->slug)}}" class="list-group-item list-group-item-action border-light">
										{{$word->name}}
									</a>									
									
								@endforeach
							</div>
						</div>
					@else
						<div class="text-center mt-5">
							<i class="fa fa-frown-o fa-2x mb-3"></i>
							<p>Hasil Pencarian kata <strong>{{$request->keyword}}</strong> tidak ditemukan</p>
						</div>
					@endif
					


					{{ $words->appends(['keyword' => $request->keyword])->links() }}
						
				</div>
			</div>
		</div>
	</div>

	<section class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<h3>Berita Terbaru</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card border-light">
						<div class="card-body">
							<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi qui optio consequuntur tenetur tempora! Quaerat.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card border-light">
						<div class="card-body">
							<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi qui optio consequuntur tenetur tempora! Quaerat.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card border-light">
						<div class="card-body">
							<h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi qui optio consequuntur tenetur tempora! Quaerat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




@endsection