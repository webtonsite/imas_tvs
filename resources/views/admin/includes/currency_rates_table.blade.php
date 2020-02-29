
  <table class="table table-hover">
      <thead>
          <tr>
              <th>Currency</th>
              <th>Rate</th>
          </tr>
      </thead>
      <tbody>
          @foreach($rates as $key => $rate)
              <tr>
                  <td>{{$key}}</td>
                  <td>{{$rate}}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
