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
           
            if (notifications_count > 0) {
                notifications.data.forEach(function (item) {
                    if(item.type==1){
                        notifications_html +=  
                        `
                        <div class="nav-item-customize p-2 d-flex">
                            <div class="mx-3">
                                 <span style="font-size: 24px; color: red"><i class="fa-regular fa-capsules"></i></span>
                            </div>
                            <div>
                                <strong>${item.created_at}</strong>
                                <p>${item.content}</p>     
                            </div>
                        </div>

                        `
                    }
                    else if(item.type==2){
                        notifications_html +=
                        `
                        <div class="nav-item-customize p-2 d-flex">
                            <div class="mx-3">
                                <span style="font-size: 24px; color: blue"><i class="fa-regular fa-calendar-check"></i></span>
                            </div>
                            <div>
                                <strong>${item.created_at}</strong>
                                <p>${item.content}</p>
                                </div>
                            </div>
                        </div>`
                    }
                    else if(item.type==3){
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
                        </div>`
                    };

                });

                notifications_html += `
                <li class="nav-item-customize">
                <a href="#" class="text-center" style="color: black">View all notifications</a>
                </li>
                    `;
            } else {
                notifications_html =
                `
                <li class="nav-item-customize">
                <a href="#" class="text-center" style="color: black">No notifications</a>
                </li>
                    `;
            }
            $("count_notif").innerText = notifications_count;
            $("#notification").html(notifications_html);
        }
    });
}
