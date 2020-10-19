<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div id="quote" class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="footer-heading mb-4"><img src="{{ $footer_componen['logo'] }}" style="max-height: 110px;"></h2>
                  <div class="row">
                    <div class="col-md-10">
                      {!! $footer_componen['quote'] !!}
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div id="componen" class="col-md-8">
              <div class="row">
                @if(count($Kemitraan) == 0)
                <div class="col-md-4">
                </div>
                @endif
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
                @if(count($Kemitraan) > 0)
                <div class="col-md-4">
                  <h2 class="footer-heading mb-4">KEMITRAAN</h2>
                  <ul class="list-unstyled">
                    @foreach($Kemitraan as $row)
                    <li>
                      <a href="{{ Route::is('contact') ? '#'.Str::slug($row->name) : route('contact').'#'.Str::slug($row->name) }}">
                        {{$row->name}}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="row pt-3 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <div class="text-center mb-2">
                <a href="https://www.instagram.com/lazatto.id/" target="_blank"><img src="{{ asset('asset/picture/default/icon_ig.png') }}" alt="social media" width="40px"></a>
                <a href="https://twitter.com/LazattoChicken?s=09" target="_blank"><img src="{{ asset('asset/picture/default/icon_tw.png') }}" alt="social media" width="40px"></a>
                <a href="https://api.whatsapp.com/send?phone={{ App\Http\Controllers\HomeController::getSiteConfig()->config['wa_no'] }}&text=Terima%20kasih%20telah%20menghubungi%20info%20kemitraan%20Lazatto%20Chicken%20&%20Burger." target="_blank"><img src="{{ asset('asset/picture/default/icon_wa.png') }}" alt="social media" width="40px"></a>
              </div>
              <p class="copyright">
                &copy;<script>document.write(new Date().getFullYear());</script> Lazatto Chicken & Burger<br>
                Web Development By <a href="https://f-plat.id" target="_blank"><strong>PT. Fortuna Platina Indonesia</strong></a>
              </p>
              </div>
            </div>
          </div>
        </div>
      </footer>