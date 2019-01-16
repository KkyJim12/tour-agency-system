@extends('backend.backend-layouts.admin-master')

@section('content-header')
<h3>สาขา <i class="fas fa-code-branch"></i></h3>
@endsection

@section('content')
<a class="btn btn-success" href="/admin/admin-create-branch">สร้างสาขา</a>
<div class="container">
  <div class="row">
    <div class="col-md-11 table-field">
      <table class="table table-bordered table-hover admin-table">
          <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>ชื่อสาขา</th>
          <th>เรียง</th>
          <th>ซ่อน</th>
          <th>แก้ไข</th>
          <th>ลบ</th>
        </tr>
    </thead><tbody>
        @foreach($branch as $show_branch)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$show_branch->branch_name}}</td>
          <td>{{$show_branch->branch_sort}}</td>
          <td>
            @if($show_branch->branch_hide == null)
              <i class="far fa-times-circle"></i>
            @else
              <i class="far fa-check-circle"></i>
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="/admin/admin-edit-branch/{{$show_branch->_id}}">แก้ไข</a>
          </td>
          <td>
            <form class="" action="/admin/admin-delete-branch-process/{{$show_branch->_id}}" method="post">
              <input type="hidden" name="branch_id" value="{{$show_branch->_id}}">
              @csrf
              <button class="btn btn-danger" type="submit" name="button" onclick="confirm('ยืนยันการลบ')">ลบ</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
      </table>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('.table').DataTable();
} );
</script>
@endsection
