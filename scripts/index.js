// Sample data to mimick API calls to backend

let regions = {
  Iringa: {
    summary:
      "Ikiwa ipo katika milima ya kusini ya Tanzania, Mkoa wa Mbeya una hali nzuri ya hali ya hewa kwa uzalishaji wa mahindi, pamoja na mvua za kutosha na joto la wastani. Inajulikana kwa ardhi yake yenye rutuba na ni moja ya mikoa inayozalisha mahindi kwa wingi Tanzania.",
    crops: ['mahindi','viazi']
  },
  Mbeya: {
    summary:
      "Ikiwa ipo katika milima ya kusini ya Tanzania, Mkoa wa Iringa una mazingira mazuri ya kilimo kwa uzalishaji wa mahindi, kwa wastani wa joto, mvua nzuri, na ardhi yenye rutuba. Inajulikana kwa mahindi yake ya ubora wa hali ya juu na inachukuliwa kuwa moja ya mikoa inayozalisha mahindi kwa wingi Tanzania.",
    crops: ['viazi','mahindi','maharage']
  },
  Ruvuma: {
    summary:
      "Ikiwa ipo katika sehemu ya kusini ya Tanzania, Mkoa wa Ruvuma una mazingira mazuri ya kilimo kwa uzalishaji wa mahindi, pamoja na mvua za kutosha na ardhi yenye mifereji mizuri. Inajulikana kwa kuzalisha mahindi ya ubora wa hali ya juu na inachukuliwa kuwa moja ya mikoa muhimu ya kilimo cha mahindi nchini Tanzania.",
    crops: ['mahindi','maharage']
  },
};

let crops = {
  mahindi: {
    title: "Mahindi",
    article:
      "Mahindi (Zea mays L.) ni zao la chakula muhimu zaidi nchini Tanzania, linalolimwa kwenye zaidi ya asilimia 45 ya ardhi yote inayoweza kulimwa na linachangia karibu asilimia 50 ya mapato ya wakulima wa vijijini, kwa wastani wa dola za Kimarekani 100 kwa kila kaya inayolima mahindi mwaka 2018 (FAOSTAT, 2019). Uzalishaji wa mahindi nchini unafanyika zaidi kwa hali ya mvua za asili na kwa kutumia rasilimali chache. Matumizi ya zana za kilimo za kawaida, mbegu zilizorejeshwa, matumizi ya dawa za kilimo kidogo na magugu kidogo ndiyo mfumo wa kiteknolojia unaotumika sana. Matokeo yake ni kushindwa kwa mazao mara kwa mara.",
  },
  maharage: {
    title: "Maharage",
    article:
      "Tanzania ina sekta kubwa ya uzalishaji wa maharage, na zaidi ya uzalishaji wa nchi unafanyika katika maeneo ya milima ya kaskazini na kusini. Arusha, Kilimanjaro, Mbeya, Iringa, Ruvuma, na Manyara ni baadhi ya mikoa muhimu ya uzalishaji wa maharage nchini Tanzania. Kulingana na eneo na hali ya kilimo, wakati wa kupanda maharage nchini Tanzania hutofautiana. Ingawa maeneo fulani yanaweza kupanda mapema kama Septemba au kuchelewa hadi Aprili, msimu wa msingi wa kilimo cha maharage nchini Tanzania kawaida huanza Desemba na kuishia Februari. Kulingana na tarehe ya kupanda na aina ya maharage yaliyopandwa, msimu wa mavuno kawaida huanza mwezi wa tano na unaweza kuendelea hadi mwezi wa tisa au kumi.",
  },
  viazi: {
    title: "Viazi",
    article:
      "Sekta ya viazi nchini Tanzania bado haijatengenezwa vizuri kwa kiasi kikubwa, na wakulima wengi hutumia njia za kilimo za jadi na aina duni za viazi ambazo hazizalishi sana. Hata hivyo, serikali na wadau wengine wanafanya juhudi za kuhamasisha matumizi ya aina bora za viazi na njia za kilimo za kisasa, ikiwa ni pamoja na matumizi ya umwagiliaji na mitambo ya kilimo.",
  },
};

function getSelectedValues(event) {
  event.preventDefault(); // Prevent the default form submission behavior
  const mkoaValue = document.querySelector('input[name="set1"]:checked').value; // Get the selected value of the first set of radio buttons
  const zaoValue = document.querySelector('input[name="set2"]:checked').value; // Get the selected value of the second set of radio buttons
  let mkoa = regions[mkoaValue]; // Get Details about the region
  let mazao = crops[zaoValue.toLowerCase()]; // Get Details about the crop


  let div = document.getElementById("article-space"); // Get the element to update
  div.innerHTML = `<h2> Kilimo cha ${mazao.title} - ${mkoaValue}</h2>
   <p><i> <b>${mkoaValue}:</b> ${mkoa.summary} </i></p>
    <br><br>
    <p> ${mazao.article} </p>
    `;// Update the values in display
}
