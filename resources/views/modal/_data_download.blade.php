<table class="table table-bordered" >
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">File Name</th>
      <th scope="col">Download</th>
    </tr>
</thead>
<tbody>
    <tr>
      <th scope="row">1</th>
      <td>Abstract</td>
      <td  class="text-center"><a href="{{ \Illuminate\Support\Facades\Storage::url($data->abstract_file) }}" download="{{ $data->abstract_file }}" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Full Paper</td>
      <td  class="text-center"><a href="/user/download/template?q=full_paper" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>PPT</td>
      <td  class="text-center"><a href="/user/download/template?q=ppt" class="btn btn-sm btn-success"><i class="fa fa-download"></i></a></td>
    </tr>
    </tr>
</tbody>
</table>
