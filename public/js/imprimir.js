$("#btnPrint").live("click", function () {
    var divContents = $("#dvCont").html();
    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.write('<html><head><title></title>');
    printWindow.document.write('</head><body >');
    printWindow.document.write(divContents);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
});