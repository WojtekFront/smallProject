class Calculator{
constructor(dataFirst,dataSecond){
    this.dataFirst=dataFirst;
    this.dataSecond=dataSecond;
    this.clear();

}
clear(){
this.firstData="";
this.secondData="";
this.operation=undefined;
}

delete(){

}

appendNumber(number){
    if(number ==="." && this.secondData.includes('.')) return
this.secondData=this.secondData.toString()+ number.toString();
}

choseOperation(operation){
    if(this.secondData="") return
    if(this.firstData!=""){
this.compute();
    } 
this.operation = operation;
this.firstData = this.secondData;
this.secondData = '';
}

compute(){

}

updateDisplay(button){
this.dataSecond.innerText = this.secondData;
this.dataFirst.innerText = this.firstData;
}
}

const numberButtons = document.querySelectorAll('[buttonNumber');
const operationButtons = document.querySelectorAll('[buttonSign]');
const equalButton = document.querySelector('[buttonEquals]');
const buttonClear = document.querySelector('[buttonClear]');
const buttonDelete = document.querySelector('[buttonDelete]');
const dataFirst = document.querySelector('[data-first-value]');
const dataSecond = document.querySelector('[data-second-value');

const calculator = new Calculator(dataFirst, dataSecond );

numberButtons.forEach(button => {
    button.addEventListener('click', ()=>{
        calculator.appendNumber(button.innerText);
        calculator.updateDisplay()
    })
})

operationButtons.forEach(button=>{
    button.addEventListener('click', ()=>{
        calculator.choseOperation(button.innerText);
        calculator.updateDisplay();
    })
    
})









