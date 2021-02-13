import React from 'react'
import CardItem from './CardItem'
import './Cards.css'

function Cards() {
    return (
        <div className='cards'>
            <h1> Checkout Local Designs</h1>
            <div className="cards__container">
                <div className="cards__wrapper">
                    <ul className="cards__items">
                        <CardItem
                            src="images/img-1.jpg"
                            text="Wear The Best Fabric"
                            label="Dhaka"
                            path="/services"
                        />
                         <CardItem
                            src="images/img-1.jpg"
                            text="Wear The Best Fabric"
                            label="Dhaka"
                            path="/services"
                        />
                      
                    </ul>
                    <ul className="cards__items">
                        <CardItem
                            src="images/img-1.jpg"
                            text="Wear The Best Fabric"
                            label="Dhaka"
                            path="/services"
                        />
                         <CardItem
                            src="images/img-1.jpg"
                            text="Wear The Best Fabric"
                            label="Dhaka"
                            path="/services"
                        />
                         <CardItem
                            src="images/img-1.jpg"
                            text="Wear The Best Fabric"
                            label="Dhaka"
                            path="/services"
                        />
                      
                      
                    </ul>
                </div>
            </div>
            
        </div>
    )
}

export default Cards
