window.onload = function() {
    $("#jquery-qrcode").qrcode({
        render: "table",
        size: 250,
        text: 'https://www.google.com/'
    }); 
};
