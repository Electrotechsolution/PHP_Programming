<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
    .anker{
        color : #c17;
        font-size : 2rem;
        text-decoration : none;
    }
     ul li {
    list-style: none;
}
    </style>

</head>
<body>
    <div class="">
        <h1> Array</h1>

    </div>
    <Script>
        // var a = 15;  // variable
        
        // var a = 10,20,30; // Undefind variable
    
        //var a = "12, 12, 23, 34";  // String

        //var a =  "hello";

       /* var a =  "hello";
        var a1 =  "hello";
        var a2 =  "hello";
        var a3 =  "hello";
        var a4 =  "hello";
        var a5 =  "hello";
        var a6 =  "hello";
        var a7 =  "hello";*/

        //var a = [12, 23, 43];

        /*for (var a = 0; a<= 2; a++){
        document.writeln(ary[a] + "<br>");
    }*/

    /*document.write("<ul>");
    for (var a = 0; a<= 2; a++){
        document.writeln("<li>" + ary[a] + "</li>");
    }
    document.write("</ul>");
    */

        document.write("<ul>");
        var ary = ['<a class=\"anker\" href=\"#\">Home</a>', '<a class=\"anker\" href=\"#\">About Us</a>', "hello", true, null];
        var  sum = 0;
         for (var a=0; a<= 5; a++){
            document.write("<li>" + ary[a] + "</li>");
            sum = sum + ary[a];
         }
         document.write("</ul>");
        // document.write("Total Sum of Number : ", sum);
    </script>
</body>
</html>