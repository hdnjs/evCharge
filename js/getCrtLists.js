const keyParam = document.location.href.split("=")[1];
const decordParam = decodeURI(keyParam);

function getCrtLists() {
  $.ajax({
    url: `/ev_charge/php/search_list.php?key=${decordParam}`,
    type: "GET", //  요청 방식

    success: function (data) {
      //   console.log(data);
      const parseJson = JSON.parse(data); //  json 문자열을 json 데이터 형식으로 파싱
      const items = parseJson.body.items.item;
      console.log(items);
    },
    error: function (e) {
      console.log(e);
    },
  });
}

getCrtLists();
