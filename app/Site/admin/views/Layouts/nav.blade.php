<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Compare.app</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li{{ (Route::currentRouteName() ==  'siteConfig') ? ' class="active"' : '' }}>{{ link_to_route('siteConfig', 'Site Config') }}</li>
            <li{{ (Route::currentRouteName() ==  'subjects') ? ' class="active"' : '' }}>{{ link_to_route('subjects', 'Subjects') }}</li>
            <li{{ (Route::currentRouteName() ==  'types') ? ' class="active"' : '' }}>{{ link_to_route('types', 'Types') }}</li>
            <li{{ (Route::currentRouteName() ==  'attributes') ? ' class="active"' : '' }}>{{ link_to_route('attributes', 'Attributes') }}</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>