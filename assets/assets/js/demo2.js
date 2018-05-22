var setupOption = {
    menuType : 'horizontal', //for horizontal scroll menu
    template: '<div class="menu-wrap"><div class="menu"><%= label %></div></div>', //can be any template, for template syntax see http://ejohn.org/blog/javascript-micro-templating/
    anchorSetup: [
        {
            backgroundColor: "#dc767d", 
            label: "Label1"
            },
        {
            backgroundColor: "#36d278",
            label: "Label2"
            },
        {
            backgroundColor: "#22cfc6",
            label: "Label3"
            },
        {
            backgroundColor: "#8794a1",
            label: "Label4"
            },
        {
            backgroundColor: "#1ccdaa",
            label: "Label5"
            }]
};
var scrollMenu = ScrollMenu(setupOption);