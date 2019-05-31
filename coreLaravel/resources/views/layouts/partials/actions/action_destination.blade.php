<a href="{{ $url_show }}" class="btn btn-sm btn-primary" style="text-decoration:none;"><i class="far fa-eye" style="margin-bottom:1px;"></i> Detail</a>
<form action="{{ $url_update }}" method="post">
     {{ csrf_field() }}
     {{ method_field('PUT') }}

     @if ($destination->status === 'belum disetujui')
          <input type="hidden" name="status" value="disetujui">
          <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-check" style="margin-bottom:1px;"></i> Setujui</button>
     @else
          <input type="hidden" name="status" value="belum disetujui">
          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-times" style="margin-bottom:1px;"></i> Tolak</button>
     @endif
</form>