<style>
    @import url("https://fonts.googleapis.com/css2?family=Grandstander&display=swap");
body {
  font-family: "Grandstander", cursive;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.container {
  height: 100vh;
}
.side-nav,
.nav-menu {
  height: 100%;
}
.side-nav .nav-menu {
  list-style: none;
  padding: 40px 0;
  width: 200px;
  background-color: #3498db;
}
.side-nav .nav-item {
  position: relative;
  padding: 10px 20px;
}
.nav-item.active {
  background-color: #fff;
  box-shadow: 0px -3px rgba(0, 0, 0, 0.2), 0px 3px rgba(0, 0, 0, 0.2);
}
.nav-item.active a {
  color: #2980b9;
}
.nav-item a {
  text-decoration: none;
  color: #fff;
}
.menu-text {
  padding: 0 20px;
}
.side-nav .nav-item.active::before {
  content: "";
  position: absolute;
  background-color: transparent;
  bottom: 100%;
  right: 0;
  height: 150%;
  width: 20px;
  border-bottom-right-radius: 25px;
  box-shadow: 0 20px 0 0 #fff;
}
.side-nav .nav-item.active::after {
  content: "";
  position: absolute;
  background-color: transparent;
  top: 100%;
  right: 0;
  height: 150%;
  width: 20px;
  border-top-right-radius: 25px;
  box-shadow: 0 -20px 0 0 #fff;
}

</style>
<div class="container">
  <nav class="side-nav">
    <ul class="nav-menu">
      <li class="nav-item"><a href="#"><i class="fas fa-tachometer-alt"></i><span class="menu-text">Dashboard</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-user"></i><span class="menu-text">Users</span></a></li>
      <li class="nav-item active"><a href="#"><i class="fas fa-file-alt"></i><span class="menu-text">Posts</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-play "></i><span class="menu-text">Media</span></a></li>
      <li class="nav-item"><a href="#"><i class="fas fa-sign-out-alt"></i><span class="menu-text">exit</span></a></li>
    </ul>
  </nav>
</div>
<script>
    $(function() {
			$("li").click(function(e) {
			  e.preventDefault();
			  $("li").removeClass("active");
			  $(this).addClass("active");
			});
		});
</script>