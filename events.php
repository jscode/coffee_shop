<!DOCTYPE html>

 <?php include ("header.html");
 include ("nav_menu.html");
  // require_once "../src/apiClient.php";
  // require_once "../src/contrib/apiCalendarService.php";


// session_start();
//
// require_once "../src/apiClient.php";
// require_once "../src/contrib/apiCalendarService.php";
//
// $apiClient = new apiClient();
// $apiClient->setUseObjects(true);
// $service = new apiCalendarService($apiClient);
//
// if (isset($_SESSION['oauth_access_token'])) {
//   $apiClient->setAccessToken($_SESSION['oauth_access_token']);
// } else {
//   $token = $apiClient->authenticate();
//   $_SESSION['oauth_access_token'] = $token;
// }
?>


<body>
<div id="container" class="cf">
  <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=oa994pq6d76e6305heuh7s01k8%40group.calendar.google.com&amp;color=%23711616&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
</body>

</html>
