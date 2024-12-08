<!-- begin cutsom page navbar template -->

{{* debug *}}

{{* import variables from neuhub-config.php so they are available in this template *}}
{{include file="neuhub-config.tpl"}}


            {{* check for not null. *}}
            {{if isset($userinfo.icon) }}

              {{* If there is an user icon display it *}}
              {{$redtab.icon=$userinfo.icon}}
  
            {{else}}
  
              {{* If there is not user icon display a default icon instead *}}
              {{$redtab.icon="/view/theme/neuhub-tab/img/blank-profile-picture-180x180.png"}}
              
            {{/if}}


      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none" >
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">

            {{* TODO Fix dark mode (fix any display issues) and make it work with Codestitch code. Temporarily Disabled.
              <a href="{{$url}}?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="{{$url}}?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
            *}}


              {{if $localuser}}

              <div class="nav-item dropdown d-none d-md-flex">
                <div class="dm-notifications-icon-off" style="display:none">
                  <a href="/network/?f=&dm=1" class="nav-link px-0" tabindex="-1" aria-label="Show DM notifications">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                      <path d="M3 7l9 6l9 -6" />
                    </svg>
                  </a>
                </div>
                <div class="dm-notifications-icon-on" style="display:none">
                  <a href="/network/?f=&dm=1" class="nav-link px-0" tabindex="-1" aria-label="Show DM notifications">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor" />
                      <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="badge bg-red"></span>
                  </a>
                </div>
              </div>
              <div class="nav-item dropdown d-none d-md-flex me-3">
                <div class="notifications-icon-desktop-off" style="display:none">
                  <a href="/hq" class="nav-link px-0" tabindex="-1" aria-label="Show notifications">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                      <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                  </a>
                </div>
                <div class="notifications-icon-desktop-on" style="display:none">
                  <a href="/hq" class="nav-link px-0" tabindex="-1" aria-label="Show notifications">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor" />
                      <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="badge bg-red"></span>
                  </a>
                </div>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Last Updates</h3>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="/hq" class="text-body d-block">Headquarters (HQ)</a>
                            <!--
                            <div class="d-block text-secondary text-truncate mt-n1">
                              Private Messages
                            </div>
                            -->
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="/network/?f=&dm=1" class="text-body d-block">Direct Messages (DMs)</a>
                            <!--
                            <div class="d-block text-secondary text-truncate mt-n1">
                              Private Messages
                            </div>
                            -->
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="/network/?f=&star=1" class="text-body d-block">Starred Posts</a>
                            <!--
                            <div class="d-block text-secondary text-truncate mt-n1">
                              Update change-version.js (#29736)
                            </div>
                            -->
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions show">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                          <div class="col text-truncate">
                            <a href="/notifications" class="text-body d-block">Notifications</a>
                            <!--
                            <div class="d-block text-secondary text-truncate mt-n1">
                              Regenerate package-lock.json (#29730)
                            </div>
                            -->
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions">
                              <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{/if}}

            </div>
            <!-- Top Navbar User Menu FULL SCREEN -->
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url({{$redtab.icon}})"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>{{if $nav.login && !$userinfo.addr}}
                    Welcome Guest
                {{else}}
                    {{$userinfo.name}}
                {{/if}}</div>
                  <div class="mt-1 small text-secondary">{{$userinfo.addr}}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">




              {{if $is_owner}}
                <a class="dropdown-item" href="/channel"><!-- <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp; -->View Channel</a>

                {{foreach $nav.usermenu as $usermenu}}
                    <a class="dropdown-item{{if $usermenu.2}} active{{/if}}"  href="{{$usermenu.0}}" title="{{$usermenu.3}}" role="menuitem" id="{{$usermenu.4}}">{{$usermenu.1}}</a>
                {{/foreach}}
                {{if $nav.group}}
                    <a class="dropdown-item" href="{{$nav.group.0}}" title="{{$nav.group.3}}" role="menuitem" id="{{$nav.group.4}}">{{$nav.group.1}}</a>
                {{/if}}
                
                
                <a class="dropdown-item" href="/connections"><!-- <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp; -->Connections</a>
                
                <div class="dropdown-divider"></div>
                
                {{if $nav.manage}}
                    <a class="dropdown-item{{if $sel.name == Manage}} active{{/if}}" href="{{$nav.manage.0}}" title="{{$nav.manage.3}}" role="menuitem" id="{{$nav.manage.4}}">{{$nav.manage.1}}</a>
                {{/if}}
                {{if $nav.channels}}
                    {{foreach $nav.channels as $chan}}
                        <a class="dropdown-item" href="manage/{{$chan.channel_id}}" title="{{$chan.channel_name}}" role="menuitem"><i class="fa fa-circle{{if $localuser == $chan.channel_id}} text-success{{else}} invisible{{/if}}"></i> {{$chan.channel_name}}</a>
                    {{/foreach}}
                {{/if}}
                {{if $nav.profiles}}
                    <a class="dropdown-item" href="{{$nav.profiles.0}}" title="{{$nav.profiles.3}}" role="menuitem" id="{{$nav.profiles.4}}">{{$nav.profiles.1}}</a>
                {{/if}}
                {{if $nav.settings}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item{{if $sel.name == Settings}} active{{/if}}" href="{{$nav.settings.0}}" title="{{$nav.settings.3}}" role="menuitem" id="{{$nav.settings.4}}">{{$nav.settings.1}}</a>
                {{/if}}
                {{if $nav.admin}}
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item{{if $sel.name == Admin}} active{{/if}}" href="{{$nav.admin.0}}" title="{{$nav.admin.3}}" role="menuitem" id="{{$nav.admin.4}}">{{$nav.admin.1}}</a>
                {{/if}}
                {{if $nav.logout}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{$nav.logout.0}}" title="{{$nav.logout.3}}" role="menuitem" id="{{$nav.logout.4}}">{{$nav.logout.1}}</a>
                {{/if}}
            {{/if}}
        
        
            {{if $localuser && !$is_owner}}
            
                {{if $nav.manage}}
                    <a class="dropdown-item{{if $sel.name == Manage}} active{{/if}}" href="{{$nav.manage.0}}" title="{{$nav.manage.3}}" role="menuitem" id="{{$nav.manage.4}}">{{$nav.manage.1}}</a>
                {{/if}}
                {{if $nav.channels}}
                    {{foreach $nav.channels as $chan}}
                        <a class="dropdown-item" href="manage/{{$chan.channel_id}}" title="{{$chan.channel_name}}" role="menuitem"><i class="fa fa-circle{{if $localuser == $chan.channel_id}} text-success{{else}} invisible{{/if}}"></i> {{$chan.channel_name}}</a>
                    {{/foreach}}
                {{/if}}
            

                {{if $nav.settings}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item{{if $sel.name == Settings}} active{{/if}}" href="{{$nav.settings.0}}" title="{{$nav.settings.3}}" role="menuitem" id="{{$nav.settings.4}}">{{$nav.settings.1}}</a>
                {{/if}}
                {{if $nav.admin}}
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item{{if $sel.name == Admin}} active{{/if}}" href="{{$nav.admin.0}}" title="{{$nav.admin.3}}" role="menuitem" id="{{$nav.admin.4}}">{{$nav.admin.1}}</a>
                {{/if}}
            <!--
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/settings"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/admin"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Admin</a>
            -->
            <div class="dropdown-divider"></div>
            {{/if}}
        
        
            {{if ! $is_owner && $userinfo.addr}}
            
                <a class="dropdown-item" href="{{$nav.rusermenu.0}}" role="menuitem">{{$nav.rusermenu.1}}</a>
                <a class="dropdown-item" href="{{$nav.rusermenu.2}}" role="menuitem">{{$nav.rusermenu.3}}</a>
            
            {{/if}}		
            
            {{if $nav.login && !$userinfo.addr}}

                <a class="dropdown-item" href="login" title="{{$nav.loginmenu.1.3}}">
                    {{$nav.loginmenu.1.1}}
                </a>
                <a class="dropdown-item" href="rmagic" title="{{$nav.loginmenu.1.3}}">
                    Magic Sign-On
                </a>							
                <a class="dropdown-item" href="rmagic" title="{{$nav.loginmenu.1.3}}">
                    Remote Authentication
                </a>        				
            {{/if}}

            {{if $nav.register}}
                <a class="dropdown-item" href="{{$nav.register.0}}" title="{{$nav.register.3}}" id="{{$nav.register.4}}">
                    {{$nav.register.1}}
                </a>
            {{/if}}

            {{$userinfo["neuhub-tab"].user_dropdown_menu_desktop}}




            <!--
            <a href="/channel" class="dropdown-item">View Channel</a>
            <a href="/profile/wistex" class="dropdown-item">View Profile</a>
            <a href="/profiles/3" class="dropdown-item">Edit Profile</a>
            <a href="/connections" class="dropdown-item">Connections</a>
            <div class="dropdown-divider"></div>
            <a href="{{$settings_url}}" class="dropdown-item">Settings</a>
            <a href="/admin" class="dropdown-item">Admin</a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item">Logout</a>
            -->



          </div>


            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">

            {{* ! Note: This menu does not appear on mobile. Make sure that users can get to these pages some other way. 
                For example, you may want to make sure that there are links to these pages on the home page and/or in other navbars. *}}
            
            {{*
              Example for Website: Home, Articles, Channels, Forums, Help
              Example for Public Hub: Home, Channels, Forums, Membership, Help
              Example for Single User Hub: Profile, Posts, Photos, Calendar, Help

              Default Setup:
                Not Logged In: Home, Login, Register
                Viewing Own Profile: Home, HQ
                Viewing Someone Else's Profile: Home, HQ
                Viewing Other Pages: Home, HQ
            *}}

            

            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">

              
              {{if $nav.login && !$userinfo.addr}}
                {{* If Not Logged In *}}

                <li class="nav-item">
                  <a class="nav-link" href="{{$userinfo["neuhub-tab"].home_domain}}/{{$userinfo["neuhub-tab"].home_path}}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>

                {{$userinfo["neuhub-tab"].topmenu_li_after_home_loggedout}}

                <!-- The login link is better hidden on private hubs. You can still get to it in the dropdown or other ways. -->
                <!-- uncomment if you want this to appear in the top menu bar. -->
                <!-- 
                <li class="nav-item">
                <a class="nav-link" href="login" title="{{$nav.loginmenu.1.3}}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">{{* <!-- Download SVG icon from http://tabler-icons.io/i/home --> *}}
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                  <path d="M20 12h-13l3 -3m0 6l-3 -3" />
                </svg>
                  </span>
                  <span class="nav-link-title">
                  {{$nav.loginmenu.1.1}}
                  </span>
                </a>
              </li>
              -->
   
              <li class="nav-item">
              <a class="nav-link" href="rmagic" title="{{$nav.loginmenu.1.3}}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-affiliate-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M18.5 3a2.5 2.5 0 1 1 -.912 4.828l-4.556 4.555a5.475 5.475 0 0 1 .936 3.714l2.624 .787a2.5 2.5 0 1 1 -.575 1.916l-2.623 -.788a5.5 5.5 0 0 1 -10.39 -2.29l-.004 -.222l.004 -.221a5.5 5.5 0 0 1 2.984 -4.673l-.788 -2.624a2.498 2.498 0 0 1 -2.194 -2.304l-.006 -.178l.005 -.164a2.5 2.5 0 1 1 4.111 2.071l.787 2.625a5.475 5.475 0 0 1 3.714 .936l4.555 -4.556a2.487 2.487 0 0 1 -.167 -.748l-.005 -.164l.005 -.164a2.5 2.5 0 0 1 2.495 -2.336z" stroke-width="0" fill="currentColor" />
                </svg>
                </span>
                <span class="nav-link-title">
                Magic Sign On
                </span>
              </a>
            </li>
		
                {{if $nav.register}}
                    <li class="nav-item {{$nav.register.2}} d-lg-flex">
                        <a class="nav-link" href="{{$nav.register.0}}" title="{{$nav.register.3}}" id="{{$nav.register.4}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{$nav.register.1}}
                            </span>

                        </a>
                    </li>
                {{/if}}

            {{else}}		
                {{* Else If Logged In *}}

                

                
                <li class="nav-item">
                  <a class="nav-link" href="{{$userinfo["neuhub-tab"].home_domain}}/{{$userinfo["neuhub-tab"].home_path}}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!--
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      -->
                      <i class="fa5 fa-fw fa5-home text-muted"></i>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                
                {{$userinfo["neuhub-tab"].topmenu_li_after_home_loggedin}}
              
                {{if $userinfo.addr}}
                

                  <!--
                <li class="nav-item">
                  <a class="nav-link" href="/hq" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-castle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 19v-2a3 3 0 0 0 -6 0v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-14h4v3h3v-3h4v3h3v-3h4v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M3 11l18 0" />
                        </svg>
                    </span>
                    <span class="nav-link-title">
                      Headquarters (HQ)
                    </span>
                  </a>
                </li> 

                <li class="nav-item">
                  <a class="nav-link" href="/channel/scott" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-broadcast" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 19.364a9 9 0 1 0 -12.728 0" /><path d="M15.536 16.536a5 5 0 1 0 -7.072 0" /><path d="M12 13m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Posts
                    </span>
                  </a>
                </li> 

                -->               

                {{/if}}

            {{/if}}


            <!-- navapps -------------------------------------------------------------------- -->

            {{* Shows pinned apps in top navigation bar on user's own channel. *}}    
            {{foreach $navbar_apps as $navbar_app}}
              <li class="nav-item">
              {{$navbar_app|replace:'d-lg-none':'nav-link-title ms-2'|replace:'Channel':'Channel'|replace:'fa fa-fw fa-home':'fa5 fa-fw fa5-house-user text-muted'|replace:'fa-user-circle-o':'fa-user-circle-o text-muted'}}
              </li>
          {{/foreach}}
          
        {{*
          {{foreach $channel_apps as $channel_app}}
            <li class="nav-item">
            {{$channel_app|replace:'d-lg-none':'nav-link-title ms-2'|replace:'Channel':'My Channel'}}
            </li>
        {{/foreach}}
        *}}

              <!--
              <li class="nav-item">
              {{foreach $navbar_apps as $navbar_app}}
                  {{$navbar_app|replace:'nav-link':'dropdown-item'}}
              {{/foreach}}
              </li>
              -->
              
            <!-- end navapps ---------------------------------------------------------------- -->

            <!--  Featured Apps ----------------------------------------------------------------- -->
            
            {{* if $featured_apps *}}

            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow" style="left: 0;">
                <!-- <div class="nav-item dropdown-menu dropdown-menu-end dropdown-menu-arrow"> -->
                
                    
                    <a class="dropdown-toggle nav-link !text-primary" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-atom" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 12v.01" />
                        <path d="M19.071 4.929c-1.562 -1.562 -6 .337 -9.9 4.243c-3.905 3.905 -5.804 8.337 -4.242 9.9c1.562 1.561 6 -.338 9.9 -4.244c3.905 -3.905 5.804 -8.337 4.242 -9.9" />
                        <path d="M4.929 4.929c-1.562 1.562 .337 6 4.243 9.9c3.905 3.905 8.337 5.804 9.9 4.242c1.561 -1.562 -.338 -6 -4.244 -9.9c-3.905 -3.905 -8.337 -5.804 -9.9 -4.242" />
                      </svg>
                    </span>

                    <span class="nav-link-title">Apps<!-- <i class="generic-icons-nav fa fa-fw fa-caret-down"></i> --></span>
                        <span class="d-xs-block d-sm-block d-md-none  d-lg-none d-xl-none"></span>
                        <!-- <i class="generic-icons-nav fa fa-fw fa-caret-square-down"></i> -->
                        
                         <!-- <span class="icon-hz-64"></span> -->
                         <!--
                         <span class="icon-hz"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span>
                         -->
                    </a>
                    <div class="dropdown-menu shadow !dropdown-menu-end animated--grow-in">
                                        
                        <!--                                        
                        <a class="dropdown-item" href="/"><i class="generic-icons-nav fa fa-fw fa-home"></i>Home</a>
                        <div class="dropdown-divider"></div>
                        -->

                        {{if $is_owner}}    
                          
					              <!-- featured apps -->
                    		<div class="dropdown-header text-uppercase text-muted">
						              {{$featured_apps|replace:'featured-apps nav-link':'dropdown-item'}}
                    			<!-- {{$featured_apps}} -->
				

                          
				
                    		</div>
					<!-- nav apps -->

                    
                    		<div id="app-bin-container" data-token="{{$form_security_token}}">
                    			{{foreach $nav_apps as $nav_app}}
                    				{{$nav_app|replace:'nav-link':'dropdown-item'}}
                    			{{/foreach}}
                    		</div>
                    		<!-- <div class="dropdown-divider"></div> -->
                    		<a class="dropdown-item" href="/apps"><i class="generic-icons-nav fa fa-fw fa-plus"></i>{{$addapps}}</a>
                		{{else}}
					<!-- system apps -->
                    		<div class="dropdown-header text-uppercase text-muted">
                    			{{$sysapps|replace:'nav-link':'dropdown-item'}}
                    		</div>
                    		{{foreach $nav_apps as $nav_app}}
                    			{{$nav_app|replace:'nav-link':'dropdown-item'}}
                    		{{/foreach}}
                            
                		{{/if}}    
                	</div>
                                    
                </div>
            </li>            

             

            

                      {{* /if *}}

            <!-- end featured apps ---------------------------------------------------------- -->

 


{{*
                <li class="nav-item">
                  <a class="nav-link" href="/article/main" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/articles" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                        <path d="M13 8l2 0" />
                        <path d="M13 12l2 0" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Articles
                    </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/courses" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                        <path d="M6 9l12 0" />
                        <path d="M6 12l3 0" />
                        <path d="M6 15l2 0" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Courses
                    </span>
                  </a>
                </li>

                <!--
                <li class="nav-item">
                  <a class="nav-link" href="/directory?f=&pubforums=0&global=0" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                        <path d="M10 16h6" />
                        <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 8h3" />
                        <path d="M4 12h3" />
                        <path d="M4 16h3" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Channels
                    </span>
                  </a>
                </li>
                -->

                <li class="nav-item">
                  <a class="nav-link" href="/directory?f=&pubforums=1&global=0" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                        <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Forums
                    </span>
                  </a>
                </li>


                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M15 15l3.35 3.35" /><path d="M9 15l-3.35 3.35" /><path d="M5.65 5.65l3.35 3.35" /><path d="M18.35 5.65l-3.35 3.35" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Help
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                      Documentation
                    </a>
                    <a class="dropdown-item" href="./changelog.html">
                      Changelog
                    </a>
                    <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                      Source code
                    </a>
                    <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor project!
                    </a>
                  </div>
                </li>

                *}}

              </ul>
            </div>

            <div>
              <form action="search" method="get" autocomplete="off" novalidate>
                <div class="input-icon">
                  <span class="input-icon-addon">
                    {{* <!-- Download SVG icon from http://tabler-icons.io/i/search --> *}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                  </span>
                  <input type="text" value="" name="search" class="form-control" placeholder="Search…" aria-label="Search in website">
                </div>
              </form>
            </div>

            {{if !$localuser}}
              <div style="margin-right: 1rem;">&nbsp;</div> 
            {{/if}}

          </div>
        </div>
      </header>

<!-- end default navbar template -->