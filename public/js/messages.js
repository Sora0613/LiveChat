const get_data = () => {
    $.ajax({
        url: "/messages",
        dataType: "json",
        success: data => {

            $("#messages_data")
                .find(".message-visible")
                .remove();

            for (var i = 0; i < data.messages.length; i++) {
                console.log(data.messages[i].text);
                const html = `
                            <div class="message-visible">
                                <div class="chat-messages" id="chat-messages">
                                    <div class="message">
                                        <div class="user">匿名ユーザー ${data.messages[i].id}</div>
                                        <div class="text">${data.messages[i].text}</div>
                                    </div>
                                </div>
                           </div>
                        `;

                $("#messages_data").append(html);
            }
            console.log(data);
        },
        error: () => {
            console.log("error");
        }
    });
    setTimeout(get_data, 1000);
}

get_data();
