// 問1

for(var a1 = 0; a1 < 5 ; a1++){
    document.write("★");
}

document.write("<br><br>");

// 問2

for(var a2 = 1; a2 <= 2 ; a2++){
    for(var b2 = 1 ; b2 <= 3 ; b2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

// 問3

for(var a3 = 1; a3 <= 2 ; a3++){
    for(var b3 =1 ; b3 <= 5 ; b3++){
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>");

// 問4

for(var a4 = 1; a4 <= 4; a4++){
    for(var b4 = 1 ; b4 <= 5 ; b4++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

// 問5

for(var a5 = 1; a5 <= 4 ; a5++){
    for(var b5 = 1 ; b5 <= 3 ; b5++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

// 問6

for(var a6 = 1 ; a6 <= 3 ; a6++){
    for(var b6 = 1 ; b6 <= 3 ; b6++){
        if((b6 % 2) == 0){
            document.write("☆");
        } else {
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>");

// 問7

for(var a7 = 1 ; a7 <= 4 ; a7++){
    for(var b7 = 1 ; b7 <= 5 ; b7++){
        if((b7 % 2) !== 0){
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");

// 問8

for(var a8 = 1 ; a8 <= 5 ; a8++){
    for(var b8 = 1 ; b8 <= a8 ; b8++){
        document.write("★");
    }
    document.write("<br>");
}