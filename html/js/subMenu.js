$(document).ready(function(){$(".menu_midle > a").click(function(){var e=/(menu_)(\S+)/gi,n=e.exec($(this).parent().attr("id")),u="#sub_menu_"+n[2];return $(".blockSubMenuHor").hide(),$(u).show("slow"),!1})});
//# sourceMappingURL=maps/subMenu.js.map
