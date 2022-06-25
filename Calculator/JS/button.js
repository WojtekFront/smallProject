class Calculator{
constructor(dataFirst,dataSecond){
    this.dataFirst=dataFirst;
    this.dataSecond=dataSecond;
    this.clean();

}
clean(){
this.firstData="";
this.secondData="";
this.operation=undefined;
}

delete(){
this.secondData =this.secondData.toString().slice(0,-1);
}

appendNumber(number){
    if(number ==="." && this.secondData.includes('.')) return
this.secondData=this.secondData.toString()+ number.toString();
}

choseOperation(operation){
    if(this.secondData === "") return
        if(this.firstData !== ""){
        this.compute();
        } 
    this.operation = operation;
    this.firstData = this.secondData;
    this.secondData = '';
}

compute(){
    let computation;
    const prev = parseFloat(this.firstData);
    const current = parseFloat(this.secondData);
    if(isNaN(prev) || isNaN(current)) return
switch(this.operation){
    case '+':
        computation = prev + current;
        break;
    case '-':
        computation = prev - current;
        break;
    case '*':
        computation = prev * current;
        break;
    case '/':
        computation = prev / current;
        break;
    case '^':
        computation = prev ** current;
        break;
    case '%':
        computation = (prev )/100* current ;
        break;
    default:
        return;
    }
    this.secondData=computation;
    this.operation = undefined;
    this.firstData="";

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

operationButtons.forEach(button =>{
    button.addEventListener('click', ()=>{
        calculator.choseOperation(button.innerText);
        calculator.updateDisplay();
    })
    
})

equalButton.addEventListener('click', button => {
    calculator.compute();
    calculator.updateDisplay();

})


buttonClear.addEventListener('click',()=>{
    calculator.clean();
    calculator.updateDisplay();
})

buttonDelete.addEventListener('click',()=>{
    calculator.delete();
    calculator.updateDisplay();
})







