

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Home"><span class=" glyphicon glyphicon-grain"></span>Welcome !</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href="<?= base_url()?>admin_home">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>admin_resep">Resep </a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>admin_kontak">Contact</a>
                    </li>                   
                  </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?= base_url()?>admin/logout">Logout</a>
                        </li>
                    </ul>
             


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>