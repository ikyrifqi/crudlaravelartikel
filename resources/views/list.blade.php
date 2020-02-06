<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" 
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Rifqi Laravel</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
</head>
<body class="bg-light">
    <div class="p-3 mb-2 bg-dark text-white">
    	<div class="container">
    		<div class="h3">CRUD RIFQI LARAVEL DATA ARTIKEL</div>   		
    	</div>    	
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 text-right mb-4">
    			<a href="{{route('articles.add')}}" class="btn btn-primary">Tambah</a>
    		</div>

    		@if(Session::has('msg'))
    		  <div class="col-md-12">
    		  	<div class="alert alert-success">{{Session::get('msg')}}</div>
    		  </div>
    		@endif

    		@if(Session::has('errorMsg'))
    		  <div class="col-md-12">
    		  	<div class="alert alert-danger">{{Session::get('errorMsg')}}</div>
    		  </div>
    		@endif
</div>
    <div class="row">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-header"><h5>Daftar Artikel</h5></div>
    			<div class="card-body">
    				<table class="table">
    					<thead class="thead-dark">
    					<tr>
    						<th>ID</th>
    						<th>Judul</th>
    						<th>Pengarang</th>
    						<th>Dibuat</th>
    						<th width="100">Ubah</th>
    						<th width="100">Hapus</th>
    					</tr>	
    					</thead>
    					@if($articles)
    					   @foreach($articles as $article)
    					<tr>
    						<td>{{$article->id}}</td>
    						<td>{{$article->title}}</td>
    						<td>{{$article->author}}</td>
    						<td>{{$article->created_at}}</td>
    						<td><a href="{{url('articles/edit/'.$article->id)}}" class="btn btn-primary">Ubah</a></td>
    						<td><a href="#" onclick="deleteArticle({{$article->id}});"class="btn btn-danger">Hapus</a></td>
    					</tr>
    					   @endforeach
    					@else
    					<tr>
    						<td colspan="6">Maaf, Artikel Belum Ditambahkan</td>
    					</tr>
    					@endif
    				</table>
    			</div>
    			</div>    			
    		</div>  		
    	</div> 	
    </div>
</body>
</html> 
<script type="text/javascript">
	function deleteArticle(id) {
		if (confirm('Apakah anda ingin menghapus artikel ini ?')){
			window.location.href='{{url('articles/delete')}}/'+id;
		}
	}

</script>             