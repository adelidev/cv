$(".nav-item").click(function() {
    $(".nav-item").removeClass("nav-item-active");
    $(this).addClass("nav-item-active");
})

const competences = [
    "Compétences Front-End",
    "Compétences Back-End",
    "Production musicale"
];

$(".arrow-prev").click(function() {
    for (let i = 0; i < competences.length; i++) {
        if (competences[i] == $("#comp-active-title").text()) {
            if (i > 0)
                $("#comp-active-title").text(competences[--i]);
            else $("#comp-active-title").text(competences[competences.length]);
        }
    }
});
$(".arrow-next").click(function() {
    for (let i = 0; i < competences.length; i++) {
        if (competences[i] == $("#comp-active-title").text()) {
            $("#comp-active-title").text(competences[++i]);
        }
    }
});

var obj_comp = {
    title,
    description,
}