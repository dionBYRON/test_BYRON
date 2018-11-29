// if/else & switch statement opdracht

// var JohnAVRG = (89 + 120 + 100) / 3;
// var MikeAVRG = (89 + 120 + 103) / 3;
// var MarryAVG = (89 + 120 + 103) / 3;


// switch (true) {
//     case JohnAVRG > MikeAVRG && JohnAVRG > MarryAVG:
//         console.log('John\'s team won with a score of ' + JohnAVRG)
//         break;
//     case JohnAVRG < MikeAVRG && MikeAVRG > MarryAVG:
//         console.log('Mike\'s team won with a score of ' + MikeAVRG)
//         break;
//     case MarryAVG > JohnAVRG && MarryAVG > MikeAVRG:
//         console.log('Marry\'s team won with a score of ' + MarryAVG)
//         break;
//     case JohnAVRG === MikeAVRG:
//         console.log('It\'s a draw between John and Mike! both have scored ' + MikeAVRG + ' points')
//         break;
//     case JohnAVRG === MarryAVG:
//         console.log('It\'s a draw between John and Marry! both have scored ' + JohnAVRG + ' points')
//         break;
//     case MikeAVRG === MarryAVG:
//         console.log('It\'s a draw between Mike and Marry! both have scored ' + MikeAVRG + ' points')
//         break;
//     case JohnAVRG === MikeAVRG && JohnAVRG === MarryAVG && MikeAVRG === MarryAVG:
//         console.log('It\'s a draw! both have scored ' + MikeAVRG + ' points')
//         break;
//     default:
//         break;
// }


/*****************************
 * Functions and Arrays
 */

// Push item toevoegen aan het einde van de array
// Shift verwijder het eerste item uit de array
// Unshift item toevoegen aan het begin van de array
// Pop verwijder het laatste item uit de array

// var names = ['John', 'Mike', 'Jane', 'Peter'];
// console.log(names);

// names.push(names[0]);
// names.shift();
// console.log(names);

/*****************************
 * Coding Challenge 3
 */

// var bills = [124, 48, 268];
// var tips = [];
// var totalPrice = [];

// function tipCalculator(price) {
//     if (price < 50) {
//         return price * 0.2;
//     } else if (price >= 50 && price < 200) {
//         return price * 0.15;
//     } else {
//         return price * 0.1;
//     }
// }

// for (var i = 0; i < bills.length; i++) {
//     tips.push(tipCalculator(bills[i]));
//     totalPrice.push(bills[i] + tips[i]);
//     console.log('John has tipped ' + tips[i] + ' on a bill of ' + bills[i] + ' and the total price was ' + totalPrice[i]);
// }

/*****************************
* Objects & Properties
*/

// // Object literal
// var john = {
//     firstName: 'John',
//     lastName: 'Smith',
//     birthyear: '1990',
//     family: ['Jane', 'Mike', 'Mark', 'Peter'],
//     job: 'teacher',
//     isMarried: false
// };

// console.log(john.firstName);
// console.log(john['lastName']);
// var x = 'birthyear';
// console.log(john[x]);

// // New Object syntax
// var jane = new Object();
// jane.firstName = 'Jane';
// jane.birthyear = '1969';
// jane['lastName'] = 'Smith';
// console.log(jane);

/*****************************
* Objects & Methods
*/
// var john = {
//     firstName: 'John',
//     lastName: 'Smith',
//     birthyear: '1990',
//     family: ['Jane', 'Mike', 'Mark', 'Peter'],
//     job: 'teacher',
//     isMarried: false,
//     calcAge: function() {
//         return this.age = 2018 - this.birthyear;
//     }
// };

// console.log(john);

/*****************************
* Coding challenge 4
*/

// var john = {
//     firstName: 'John',
//     lastName: 'Smith',
//     height: '1.75', // M
//     mass: '76', // KG
//     bmiCalc: function() {
//         this.bmi = this.mass / (this.height * this.height);
//         return this.bmi;
//     }
// };
// john.bmiCalc();

// var mike = {
//     firstName: 'Mike',
//     lastName: 'Smith',
//     height: '1.75', // M
//     mass: '96', // KG
//     bmiCalc: function() {
//         this.bmi = this.mass / (this.height * this.height);
//         return this.bmi;
//     }
// };
// mike.bmiCalc();

// console.log(john, mike);

// if (john.bmiCalc() > mike.bmiCalc()) {
//     console.log(john.firstName + ' ' + john.lastName + ' has the hight bmi with ' + john.bmi);   
// } else if (john.bmiCalc() < mike.bmiCalc()) {
//     console.log(mike.firstName + ' ' + mike.lastName + ' has the hight bmi with ' + mike.bmi); 
// } else {
//     console.log('Its a draw! Both have a bmi of ' + john.bmi);
// }

/*****************************
* Loops
*/

// var john = ['John', 'Smith', 1990, false, 'blue']

// for (var i = john.length - 1; i >= 0; i-- ) {
//     console.log(john[i]);
// }

/*****************************
* Coding challenge 5
*/

var johnTips = {
    bills: [124, 48, 268, 180, 42],

    tipCalc: function() {
        this.tip = [];
        this.totalbill = [];
        for (var i = 0; i < this.bills.length; i++) {
            var percentage;
            var bill = this.bills[i];
            if (bill < 50) {
                percentage = 0.2;
            } else if ( bill >= 50 && bill < 200) {
                percentage = 0.15;
            } else {
                percentage = 0.1;
            }
            this.tip[i] = bill * percentage;
            this.totalbill[i] = bill + (bill * percentage);
        }
    }
}

var markTips = {
    bills: [77, 375, 110, 45, 42],

    tipCalc: function() {
        this.tip = [];
        this.totalbill = [];
        for (var i = 0; i < this.bills.length; i++) {
            var percentage;
            var bill = this.bills[i];
            if (bill < 100) {
                percentage = 0.2;
            } else if ( bill >= 100 && bill < 300) {
                percentage = 0.10;
            } else {
                percentage = 0.25;
            }
            this.tip[i] = bill * percentage;
            this.totalbill[i] = bill + (bill * percentage);
        }
    }
}

johnTips.tipCalc();
markTips.tipCalc();

console.log(johnTips, markTips);

function averageTip(totalTips) {
    var sumTips = 0;
    
    for (var i = 0; i < totalTips.length; i++) {
        sumTips += totalTips[i];
    }

    return sumTips / totalTips.length;
}

console.log(averageTip(markTips.tip), averageTip(johnTips.tip));

if (averageTip(markTips.tip) > averageTip(johnTips.tip)) {
    console.log('Mark\'s family tipped the highest with ' + averageTip(markTips.tip) + ' average.');
} else if (averageTip(markTips.tip) < averageTip(johnTips.tip)) {
    console.log('John\'s family tipped the highest with ' + averageTip(johnTips.tip) + ' average.');
} else {
    console.log('They both tipped the same amount on average, ' + averageTip(markTips.tip));
}


