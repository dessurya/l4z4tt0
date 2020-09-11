<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div id="quote" class="col-md-5">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="footer-heading mb-4"><img src="{{ $footer_componen['logo'] }}" style="max-height: 110px;"></h2>
                  {!! $footer_componen['quote'] !!}
                </div>
                
              </div>
            </div>
            <div id="componen" class="col-md-7">
              <div class="row">
                <div class="col-md-4">
                  <h2 class="footer-heading mb-4">NAVIGATION</h2>
                  <ul class="list-unstyled">
                    @foreach($site_menu as $row)
                    <li><a href="{{ route($row->route) }}" class="{{ Route::is($row->route) ? 'active' : '' }}">{{$row->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
                <div class="col-md-4">
                  <h2 class="footer-heading mb-4">CONTACT</h2>
                  {!! $footer_componen['contact'] !!}
                </div>
                <div class="col-md-4">
                  <h2 class="footer-heading mb-4">KEMITRAAN</h2>
                  <ul class="list-unstyled">
                    @foreach($Kemitraan as $row)
                    <li><b>{{$row->name}}</b></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-3 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p class="copyright">
                &copy;<script>document.write(new Date().getFullYear());</script> Lazatto Chicken & Burger<br>
                Web Development By <strong>F-Plat Indonesia</strong>
              </p>
              </div>
            </div>
          </div>
        </div>
      </footer>