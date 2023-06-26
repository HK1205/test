function fee(adult,child){
    var total = adult * 500 + child * 200;
    return "グループの合計金額は" + total + "円です。<br>";
}

// Aグループ(大人2人、子供4人)の合計金額
document.write("A" + fee(2,4));

// Bグループ(大人1人、子供5人)の合計金額
document.write("B" + fee(1,5));

// Cグループ(大人3人、子供7人)の合計金額
document.write("C" + fee(3,7));