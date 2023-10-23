// start bootstrap tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});
// end bootstrap tooltip

// start dashboard 02 nav 
function openNav() {
    document.getElementById("sideNav").style.width = "250px";
    document.getElementById("rightSideBox").style.marginLeft = "250px";
    document.getElementById("rightSideBox").style.width = "auto";
    document.getElementById("sideNav").style.display = "block";
    document.getElementById("openBtn").style.display = "none";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("navLogo").style.display = "block";
    document.getElementById("logo").style.display = "none";
    document.getElementById("user-header").style.paddingLeft = "250px";
    document.getElementById("version").style.display = "block";
  }
  
  function closeNav() {
    document.getElementById("sideNav").style.width = "0";
    document.getElementById("rightSideBox").style.marginLeft= "0";
    document.getElementById("rightSideBox").style.width = "100%";
    document.getElementById("openBtn").style.display = "block";
    document.getElementById("closeBtn").style.display = "none";
    document.getElementById("navLogo").style.display = "none";
    document.getElementById("logo").style.display = "block";
    document.getElementById("user-header").style.paddingLeft = "1.5rem";
    document.getElementById("version").style.display = "none";
  }
  // end dashboard 02 nav 