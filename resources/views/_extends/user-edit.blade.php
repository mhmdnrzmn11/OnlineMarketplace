<!-- Modal Edit Profile -->
<div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel">
          <b class="text-white">
            Edit Profile Data
          </b>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form action="{{ route('user.update', $user->id) }}" method="post">
            <div class="card-body">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama</label>
                  <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $user->name }}" required>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $user->email }}" required>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                  <label for="place_of_birth">Tempat Kelahiran</label>
                  <input type="text" name="place_of_birth" id="place_of_birth" class="form-control{{ $errors->has('place_of_birth') ? ' is-invalid' : '' }}" value="{{ $user->place_of_birth }}" required>
                  @if ($errors->has('place_of_birth'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('place_of_birth') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                  <label for="date_of_birth">Tanggal Kelahiran</label>
                  <input type="date" name="date_of_birth" id="date_of_birth" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" value="{{ $user->year_of_birth.'-'.$user->month_of_birth.'-'.$user->day_of_birth }}" min="{{ $year.'-01-01' }}" max="{{ $today }}" required>
                  @if ($errors->has('date_of_birth'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('date_of_birth') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                  <label for="gender">Jenis Kelamin</label>
                  <select name="gender" id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" required>
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="Pria" {{ $user->gender == 'Pria' ? 'selected' : '' }}>Pria</option>
                    <option value="Wanita" {{ $user->gender == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                    <option value="Lainnya" {{ $user->gender == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                  </select>
                  @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group col-md-6">
                  <label for="phone">Nomor Telepon</label>
                  <input type="text" name="phone" id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ $user->phone }}" required>
                  @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="float-right">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Discard</button>
                <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
