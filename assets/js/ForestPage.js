$(document).ready(function () {
    $('#plant2,#plant3,#plant4').bind('click', function () {
        document.getElementById("findModal").style.visibility = "visible"
        document.getElementById('plant2').style.visibility = "hidden"
        document.getElementById('plant3').style.visibility = "hidden"
        document.getElementById('plant4').style.visibility = "hidden"
        document.getElementById('notice').style.visibility = "hidden"
    });
});

var list = [];
var medium;
var gardenlist = [];
var number;

function iterateRecords(data) {

    $.each(data.result.records, function (recordKey, recordValue) {
        var recordId = recordValue["Plant ID"];
        var recordType = recordValue["Plant Type"];
        if (recordType == "Small Tree" || recordType == "Tree" || recordType == "Palms and Cycads" || recordType == "Medium Tree" || recordType == "Large Tree") {
            gardenlist.push(recordId);
        }
    });
    console.log(gardenlist.length);
    number = Math.floor(Math.random() * gardenlist.length);
    console.log(number);
    var id = gardenlist[number];


    $.each(data.result.records, function (recordKey, recordValue) {

        var recordId = recordValue["Plant ID"];
        var recordName = recordValue["Common Name"];
        var recordType = recordValue["Plant Type"];
        var recordWater = recordValue["Water Needs"];
        var recordLight = recordValue["Light Needs"];
        var recordHeight = recordValue["Height Ranges"];
        var recordSoil = recordValue["Soil Type"];

        /**"Palm oil producing industry concept", Freepik. [Online]. Available: https://www.freepik.com/free-vector/palm-oil-producing-industry-concept_11683174.htm#page=1&query=Palms&position=35&from_view=search.
        "Set of trees in 2d style", Freepik. [Online]. Available: https://www.freepik.com/free-vector/set-trees-2d-style_1928030.htm#page=1&query=tree&position=40&from_view=search.
        "Decorative deciduous foliage and conifer forest park trees silhouette abstract design icons set sketch isolated vector illustration", Freepik. [Online]. Available: https://www.freepik.com/free-vector/decorative-deciduous-foliage-conifer-forest-park-trees-silhouette-abstract-design-icons-set-sketch-isolated-vector-illustration_1158653.htm#page=1&query=tree&position=35&from_view=search.
        "Pack of different trees with fruits", Freepik. [Online]. Available: https://www.freepik.com/free-vector/pack-different-trees-with-fruits_925586.htm#page=1&query=tree&position=3&from_view=search.
        "Set trees of different kind in flat design", Freepik. [Online]. Available: https://www.freepik.com/free-vector/set-trees-different-kind-flat-design_912917.htm. */
        if (recordName && recordType && recordWater && recordLight && recordHeight && recordSoil && recordId == id) {
            if (recordType == "Small Tree") {
                var imgurl = 'images/small.png'
            } else if (recordType == "Tree") {
                var imgurl = 'images/tree.png'
            } else if (recordType == "Palms and Cycads") {
                var imgurl = 'images/Palms.png'
            } else if (recordType == "Medium Tree") {
                var imgurl = 'images/mediumtree.png'
            } else {
                var imgurl = 'images/largetree.png'
            }
            $(".records").append(
                $('<section class="record">').append(
                    $('<h1>').text(recordName),
                    $('<p>').text("Plant Type: " + recordType),
                    $('<p>').text("Water Needs: " + recordWater),
                    $('<p>').text("Light Needs: " + recordLight),
                    $('<p>').text("Height Ranges: " + recordHeight),
                    $('<p>').text("Soil Type: " + recordSoil),
                    $('<a id="learnMore" target="_blank">').attr('href', 'https://en.wikipedia.org/wiki/' + recordName).text("Learn More"),
                ),
                $('<img id="plantImage">').attr('src', imgurl)
            );

            list[0] = recordName;
            list[1] = recordType;
            list[2] = recordWater;
            list[3] = recordLight;
            list[4] = recordHeight;
            list[5] = recordSoil;
            console.log(list);
        }
    });
}


$("#goToGameButton").click(function () {
    var data = {
        resource_id: "fd297d03-bf72-40c7-b27e-24cc7023360c",
        limit: 100
    }

    $.ajax({
        url: "https://www.data.qld.gov.au/api/3/action/datastore_search?offset=3100",
        data: data,
        dataType: "jsonp",
        cache: true,
        success: function (data) {
            iterateRecords(data);
        }
    })
    document.getElementById("findModal").style.visibility = "hidden"
    document.getElementById("inforModal").style.visibility = "visible"
});


$("#startButton").click(function () {
    document.getElementById("inforModal").style.visibility = "hidden"
    document.getElementById("soilModal").style.visibility = "visible"
});

/**
 * Soil selection
 */
$("#sandselections").click(function (e) {
    var seleOption = e.target.value + "Option";
    if (list[5].length > 4) {
        var array = list[5].split(",");
        console.log(array);
        if (e.target.value == array[0] || e.target.value == array[1] || e.target.value == array[2]) {
            document.getElementById("soilModal").style.visibility = "hidden";
            document.getElementById("waterModal").style.visibility = "visible";
        } else {
            console.log("wrong");
            document.getElementById(seleOption).style.opacity = "0.4";
            document.getElementById(e.target.value).style.color = "red";
            document.getElementById(e.target.value).style.textShadow = "2px 2px 5px black";
            document.getElementById(e.target.value).style.cursor = "default";
            document.getElementById(e.target.value).value = "Wrong Choice!";
        }
    } else {
        if (e.target.value == list[5]) {
            document.getElementById("soilModal").style.visibility = "hidden";
            document.getElementById("waterModal").style.visibility = "visible";
        } else {
            console.log("wrong");
            document.getElementById(seleOption).style.opacity = "0.4";
            document.getElementById(e.target.value).style.color = "red";
            document.getElementById(e.target.value).style.textShadow = "2px 2px 5px black";
            document.getElementById(e.target.value).style.cursor = "default";
            document.getElementById(e.target.value).value = "Wrong Choice!"
        }
    }
});

$("#waterselections").click(function (e) {
    console.log('waterselections=', e.target.value)
    var mm = list[2].substring(0, list[2].length - 2).split(" ", -1);
    console.log(mm[0]);
    console.log(mm[2]);
    medium = (parseInt(mm[0]) + parseInt(mm[2])) / 2;
    console.log(medium)
    var select = e.target.value.substring(0, e.target.value.length - 2).split(" ", -1);

    if (medium > parseInt(select[0]) && medium < parseInt(select[2])) {
        document.getElementById("waterModal").style.visibility = "hidden"
        document.getElementById("sunModal").style.visibility = "visible"
    } else {
        var seleOption = e.target.value.substring(0, 4);
        document.getElementById(seleOption).style.opacity = "0.4"
        document.getElementById(e.target.value).style.color = "red"
        document.getElementById(e.target.value).style.textShadow = "2px 2px 5px black";
        document.getElementById(e.target.value).style.cursor = "default";
        document.getElementById(e.target.value).value = "Wrong Choice!"
    }
});

$("#sunselections").click(function (event) {
    console.log('sunselections=', event.target.value)
    var getlight = list[3].split(",");
    var getlight_value = getlight[0].toLowerCase();
    console.log(getlight_value);

    for (i = 0; i < getlight.length; i++) {
        if (event.target.value == getlight[i].toLowerCase()) {
            document.getElementById("sunModal").style.visibility = "hidden";
            document.getElementById("heightModal").style.visibility = "visible";
        }
    }
    document.getElementById(event.target.value + "-option").style.opacity = "0.4"
    document.getElementById(event.target.value).style.color = "red"
    document.getElementById(event.target.value).style.textShadow = "2px 2px 5px black";
    document.getElementById(event.target.value).style.cursor = "default";
    document.getElementById(event.target.value).value = "Wrong Choice!"
});

$("#heightselections").click(function (e) {
    console.log('#heightlections=', e.target.value)
    var height = list[4].split(" ");
    if (height.length == 2) {
        if (e.target.value == "0 to 1m") {
            document.getElementById("heightModal").style.visibility = "hidden";
            document.getElementById("conModal").style.visibility = "visible";
            document.getElementById("congratulationtext").innerText = "The " + list[0] + " has been cultivated successfully";
        } else {
            var seleOption = e.target.value.substring(0, 1);
            document.getElementById(seleOption).style.opacity = "0.4"
            document.getElementById(e.target.value).style.color = "red"
            document.getElementById(e.target.value).style.textShadow = "2px 2px 5px black";
            document.getElementById(e.target.value).style.cursor = "default";
            document.getElementById(e.target.value).value = "Wrong Choice!"
        }
    } else {
        var m = (list[4].substring(0, list[4].length - 1).split(" ", -1))[2];
        console.log(m);
        var select = e.target.value.substring(0, (e.target.value).length - 1).split(" ", -1);
        console.log(select[0]);
        console.log(select[2]);

        if (parseInt(m) > parseInt(select[0]) && parseInt(m) <= parseInt(select[2])) {
            document.getElementById("heightModal").style.visibility = "hidden";
            document.getElementById("conModal").style.visibility = "visible";
            document.getElementById("congratulationtext").innerText = "The " + list[0] + " has been cultivated successfully";
        } else {
            var seleOption = e.target.value.substring(0, 1);
            document.getElementById(seleOption).style.opacity = "0.4"
            document.getElementById(e.target.value).style.color = "red"
            document.getElementById(e.target.value).style.textShadow = "2px 2px 5px black";
            document.getElementById(e.target.value).style.cursor = "default";
            document.getElementById(e.target.value).value = "Wrong Choice!"
        }


    }

});

/**
 * close icon click function
 */
$("#closeiconfind").click(function () {
    document.getElementById("findModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconinfo").click(function () {
    document.getElementById("findModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconsoil").click(function () {
    document.getElementById("soilModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconwater").click(function () {
    document.getElementById("waterModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconsun").click(function () {
    document.getElementById("sunModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconheight").click(function () {
    document.getElementById("heightModal").style.visibility = "hidden"
    document.getElementById("failModal").style.visibility = "visible"
});

$("#closeiconcong").click(function () {
    document.getElementById("conModal").style.visibility = "hidden"
    window.location.reload();
});

$("#tryagain").click(function () {
    document.getElementById("failModal").style.visibility = "hidden"
    window.location.reload();
});

$("#closeiconfail").click(function () {
    document.getElementById("failModal").style.visibility = "hidden"
    window.location.reload();
});

/**
 * hint icon click function
 */
var iconstate = false;

$("#soilhinticon").click(function () {
    console.log(iconstate);
    if (iconstate == false) {
        console.log("soilhinton")
        document.getElementById("soilhintModal").style.zIndex = 10;
        document.getElementById("soilhinttext").innerText = "Soil Type: " + list[5];
        document.getElementById("soilhinttext").style.visibility = "visible"
        iconstate = true;
    } else if (iconstate = true) {
        console.log("soilhintoff")
        document.getElementById("soilhintModal").style.zIndex = 5;
        document.getElementById("soilhinttext").style.visibility = "hidden"
        iconstate = false;
    }
});

$("#waterhinticon").click(function () {
    console.log(iconstate);
    if (iconstate == false) {
        console.log("waterhinton")
        document.getElementById("waterhintModal").style.zIndex = 10;
        document.getElementById("waterhinttext").innerText = "Water Needs: " + list[2];
        document.getElementById("waterhinttext").style.visibility = "visible"
        iconstate = true;
    } else if (iconstate = true) {
        console.log("soilhintoff")
        document.getElementById("waterhintModal").style.zIndex = -1;
        document.getElementById("waterhinttext").style.visibility = "hidden"
        iconstate = false;
    }
});

$("#sunhinticon").click(function () {
    console.log(iconstate);
    if (iconstate == false) {
        console.log("sunhinton")
        document.getElementById("sunhintModal").style.zIndex = 10;
        document.getElementById("sunhinttext").innerText = "Light Needs: " + list[3];
        document.getElementById("sunhinttext").style.visibility = "visible"
        iconstate = true;
    } else if (iconstate = true) {
        console.log("soilhintoff")
        document.getElementById("sunhintModal").style.zIndex = -1;
        document.getElementById("sunhinttext").style.visibility = "hidden"
        iconstate = false;
    }
});

$("#heighthinticon").click(function () {
    console.log(iconstate);
    if (iconstate == false) {
        console.log("heighthinton")
        document.getElementById("heighthintModal").style.zIndex = 10;
        document.getElementById("heighthinttext").innerText = "Height Ranges: " + list[4];
        document.getElementById("heighthinttext").style.visibility = "visible"
        iconstate = true;
    } else if (iconstate = true) {
        console.log("soilhintoff")
        document.getElementById("heighthintModal").style.zIndex = -1;
        document.getElementById("heighthinttext").style.visibility = "hidden"
        iconstate = false;
    }
});


























