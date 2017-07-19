@extends('site.layouts.default')
@section('content')
<a href="{{ url('article/create') }}" role="btn" class="btn btn-default pull-right">新增</a>
<section class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
				<th>標題</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($query as $v)
			<tr>
				<td>{{ $v->id }}</td>
				<td>{{ $v->title }}</td>
				<td><a href="{{ url('article/'.$v->id.'/edit') }}" role="btn" class="btn btn-warning">編輯</a></td>
				<td>
					<form action="{{ url('article/'.$v->id) }}" method="post" onsubmit="return delete_chk()">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="delete">
						<input type="submit" role="btn" class="btn btn-danger" value="刪除">
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>	
</section>
<script type="text/javascript">
	function delete_chk(){
		if (!confirm("確定刪除"))return false;
	}
</script>
@stop