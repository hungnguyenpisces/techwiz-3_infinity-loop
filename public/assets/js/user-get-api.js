
$(document).ready(function () {
  if (!sessionStorage.getItem("token")) {
    window.location.href = "/logout";
  } else {
    $.ajax({
      url: "/api/user/notifications",
      type: "GET",
      headers: {
        "Content-Type": "application/json",
        Authorization:
          "Bearer " +
          JSON.parse(sessionStorage.getItem("token")).access_token,
      },
      success: function (data) {
        var notifications = data;
        var notifications_count = data.count_notif;
        var notifications_html = "";
        var count = 0;

        if (notifications_count > 0) {
          notifications.data.forEach(function (item) {
            if (item.type == 1) {
              notifications_html +=
                `
                            <div class="nav-item-customize p-2 d-flex">
                                <div class="mx-3">
                                     <span style="font-size: 24px; color: #198754;"><i class="fa-solid fa-pills"></i></span>
                                </div>
                                <div>
                                    <strong>${item.created_at}</strong>
                                    <p>${item.content}</p>     
                                </div>
                            </div>
    
                            `;
              count++;
            }
            else if (item.type == 2) {
              notifications_html +=
                `
                            <div class="nav-item-customize p-2 d-flex">
                                <div class="mx-3">
                                    <span style="font-size: 24px; color: #ffc107;"><i class="fa-regular fa-calendar-check"></i></span>
                                </div>
                                <div>
                                    <strong>${item.created_at}</strong>
                                    <p>${item.content}</p>
                                    </div>
                                </div>
                            </div>`;
              count++;
            }
            else if (item.type == 3) {
              notifications_html +=
                `
                            <div class="nav-item-customize p-2 d-flex">
                                <div class="mx-3">
                                    <span style="font-size: 24px; color: green"><i class="fa-regular fa-clipboard"></i></span>
                                </div>
                                <div>
                                    <strong>${item.created_at}</strong>
                                    <p>${item.content}</p>
                                    </div>
                                </div>
                            </div>`;
              count++;
            };

          });


        } else {
          notifications_html =
            `
                      <li class="nav-item-customize" >
                      <a href="#" class="text-center" style="color: black;">No notifications</a>
                      </li>
                          `;
        }

        var count_notif = document.getElementById("count_notif");
        count_notif.innerText = notifications_count;
        $("#notification").html(notifications_html);
      }
    });
  }
});
// $(document).ready(function () {
//   if (!sessionStorage.getItem("token")) {
//     window.location.href = "/logout";
//   } else {

//     $.ajax({
//       url: "/api/users/datachart",
//       type: "GET",
//       headers: {
//         "Content-Type": "application/json",
//         Authorization:
//           "Bearer " +
//           JSON.parse(sessionStorage.getItem("token")).access_token,
//       },
//       success: function (data) {
//         console.log(data);
//         //draw chart
//         new Chart(
//           document.getElementById("chart").getContext("2d"),
//           (config = {
//             type: "line",
//             data: {
//               labels: data.months,
//               datasets: [
//                 {
//                   label: "Height",
//                   data: data.height,
//                   borderColor: "rgba(0, 188, 212, 0.75)",
//                   backgroundColor: "rgba(0, 188, 212, 0.3)",
//                   pointBorderColor: "rgba(0, 188, 212, 0)",
//                   pointBackgroundColor: "rgba(0, 188, 212, 0.9)",
//                   pointBorderWidth: 1,
//                 },
//                 {
//                   label: "Weight",
//                   data: data.weight,
//                   borderColor: "rgba(233, 30, 99, 0.75)",
//                   backgroundColor: "rgba(233, 30, 99, 0.3)",
//                   pointBorderColor: "rgba(233, 30, 99, 0)",
//                   pointBackgroundColor: "rgba(233, 30, 99, 0.9)",
//                   pointBorderWidth: 1,
//                 },
//                 {
//                   label: "Blood pressure",
//                   data: data.blood_pressure,
//                   borderColor: "rgba(233, 30, 99, 0.75)",
//                   backgroundColor: "rgba(233, 30, 99, 0.3)",
//                   pointBorderColor: "rgba(233, 30, 99, 0)",
//                   pointBackgroundColor: "rgba(233, 30, 99, 0.9)",
//                   pointBorderWidth: 1,
//                 },
//                 {
//                   label: "Heart rate",
//                   data: data.heart_rate,
//                   borderColor: "rgba(233, 30, 99, 0.75)",
//                   backgroundColor: "rgba(233, 30, 99, 0.3)",
//                   pointBorderColor: "rgba(233, 30, 99, 0)",
//                   pointBackgroundColor: "rgba(233, 30, 99, 0.9)",
//                   pointBorderWidth: 0,
//                 },
//               ],
//             },
//             options: {
//               responsive: true, legend: true, title: {
//                 display: true,
//                 text: 'Chart of your health data'
//               }
//             },
//           })
//         );


//       },


//     });
//   }
// });