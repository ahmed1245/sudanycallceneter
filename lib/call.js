$(function () {
    "use strict";

    //time page
    $("#device").change(function () {
        $("#appttime1").prop("disabled", !this.checked);
        $("#appttime2").prop("disabled", !this.checked);
    });

    $("#headphone").change(function () {
        $("#appttime3").prop("disabled", !this.checked);
        $("#appttime4").prop("disabled", !this.checked);
    });

    //number page
    $("#call-leat").change(function () {
        $("#appttime5").prop("disabled", !this.checked);
        $("#appttime6").prop("disabled", !this.checked);
        $("#numbarea1").prop("disabled", !this.checked);
    });

    $("#callreson").change(function () {
        $("#appttime7").prop("disabled", !this.checked);
        $("#appttime8").prop("disabled", !this.checked);
        $("#numbarea2").prop("disabled", !this.checked);
    });

    //time and number page
    $("#callleat").change(function () {
        $("#appttime01").prop("disabled", !this.checked);
        $("#appttime02").prop("disabled", !this.checked);
        $("#alltxtarea1").prop("disabled", !this.checked);
    });

    $("#call-reson").change(function () {
        $("#appttime03").prop("disabled", !this.checked);
        $("#appttime04").prop("disabled", !this.checked);
        $("#alltxtarea2").prop("disabled", !this.checked);
    });

    $("#deviceall").change(function () {
        $("#appttime05").prop("disabled", !this.checked);
        $("#appttime06").prop("disabled", !this.checked);
    });

    $("#headphoneall").change(function () {
        $("#appttime07").prop("disabled", !this.checked);
        $("#appttime08").prop("disabled", !this.checked);
    });
});