
        calc.addEventListener('change',function(){
            let split=diners.valueAsNumber;
                
            let billTotal=bill.valueAsNumber;
                
            let grat=tip.valueAsNumber;
                
            let prov=province.value;

            let tax=0;

            if(prov=="AB"){
                tax=0.05;
            }
            else if(prov=="BC"){
                tax=0.12;
            }
            else if(prov=="MB"){
                tax=0.12;
            }
            else if(prov=="NB"){
                tax=0.15;
            }
            else if(prov=="NF"){
                tax=0.15;
            }
            else if(prov=="NW"){
                tax=0.05;
            }
            else if(prov=="NS"){
                tax=0.15;
            }
            else if(prov=="NV"){
                tax=0.05;
            }
            else if(prov=="ON"){
                tax=0.13;
            }
            else if(prov=="PE"){
                tax=0.15;
            }
            else if(prov=="QC"){
                tax=0.14975;
            }
            else if(prov=="SK"){
                tax=0.11;
            }
            else if(prov=="YK"){
                tax=0.05;
            }
            
            let tipTotal=grat/100;
            let tipAmmount=billTotal*tipTotal;
            let subTotal=billTotal+tipAmmount;
            let taxTotal=billTotal*tax;
            let totalCost=subTotal+taxTotal;
            let final=totalCost/split;

            totals.innerHTML="<li>Bill Amount: <span class=\"money\">$ "+billTotal.toFixed(2)+"</span></li> <li>Tip Amount: <span class=\"money\">$ "+tipAmmount.toFixed(2)+ " ("+grat+"%) </span></li> <li>Tax Amount: <span class=\"money\">$ "+taxTotal.toFixed(2)+ " ("+tax*100+"%)</span></li> <li>Total Owing: <span class=\"money\">$ "+totalCost.toFixed(2)+"</span></li>";
            
            if(prov=="NO"){
                msg.innerHTML="Please select your current province to calculate the tax.";
            }else{
                msg.innerHTML="Split "+split+" ways, each diner will pay <span class=\"money\">$ "+final.toFixed(2)+"</span>";
            }
        })