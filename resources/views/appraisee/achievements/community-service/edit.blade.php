  <div class="modal-body">
    <div class="form-group">
      <label>Activity</label>
      <input type="text" value="{{ $services->activity }}" required name="activity" class="form-control" placeholder="Activity">
    </div>
    <div class="form-group">
      <label> Date</label>
      <input type="date" value="{{ $services->date }}" required name="date" class="form-control">
    </div>
    <div class="form-group">
      <label>Venue</label>
      <input type="venue" value="{{ $services->venue }}" required name="venue" class="form-control" placeholder="Activity Venue">
    </div>
  </div>
