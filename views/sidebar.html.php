
<div class="sidebar">
  <div class="sidebar-content">
    <div class="sidebar-top">
      <p class="sidebar-title"><a href="/">Bubble Tea Paris</a></p>
      <p><a onclick="showRightSidebar()">Recherche</a></p>
    </div>
    <div class="sidebar-bottom">
      <p><a href="">MdM</a></p>
      <p><a href="mailto:ficticious@adress.com">contact</a></p>
    </div>
  </div>
</div>

  <div class="sidebar sidebar-right" id="sidebar-right">
    <div class="sidebar-content sidebar-content-right" id="sidebar-content-right">
      <div class="sidebar-top">
        <a onclick="showSearchSection('borough')">Par arrondissement</a>
      </div>
  </div>
</div>

<div class="search-section" id="search-section">
  <div class="container">
    <div class="row">

      <div class="col-sm-6 search-form search-form-borough" id="search-form-borough">
        <form action="/bubbleteas/index.php" method="get">
          <select name="borough">
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <button type="submit" name="action" value="search">Rechercher</button>
        </form>
      </div>

    </div>
  </div>
</div>
