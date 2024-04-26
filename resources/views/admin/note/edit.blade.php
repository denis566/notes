

  @extends('admin.layouts.main')

@section('content')




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование записи</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <!-- Main content -->
    <section class="content"> 
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <form action="{{ route('admin.note.update', $note->id) }}" method="POST" >
              @csrf
              @method('PATCH')
              <div class="card-body">
                  <div class="form-group w-25">
                    <input type="text" class="form-control" name="title"  placeholder="Название записи" value="{{ $note->title }}">
                    @error('title')
                        <div class="text-danger">Это поле необходимо для заполнения.</div>
                    @enderror
                  </div> 
                  <div class="form-group w-25">
                    <label>Выеберите категорию</label>
                    <select name="category_id" class="form-control">
                      @foreach ($catergories as $catergory)
                          <option value="{{ $catergory->id }}" {{ $catergory->id ==  $note->category_id ? ' selected' : ''  }}>{{ $catergory->title }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <textarea id="summernote" name="content">{{ $note->content  }}</textarea>
                    @error('content')
                        <div class="text-danger">Это поле необходимо для заполнения.</div>
                    @enderror
                  </div>
                  <div class="form-group w-25">
                    <label>Теги</label>
                    <div class="select2-purple">
                      <select class="select2" multiple="multiple" data-placeholder="Выберите теги" data-dropdown-css-class="select2-purple" name="tag_ids[]" style="width: 100%;">
                        @foreach ($tags as $tag)
                      
                          <option value="{{ $tag->id }}" {{ is_array( $note->tags->pluck('id')->toArray()) && in_array($tag->id, $note->tags->pluck('id')->toArray())  ? ' selected' : ''  }}>{{ $tag->title }}</option>
                      @endforeach
                      
                        
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Обновить">
              </div>
            </form>
          </div>
          
          {{-- Категории --}}
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection




