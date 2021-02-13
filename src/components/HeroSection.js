import React from 'react'
import { Button } from './Button'
import './HeroSection.css'
import '../App.css'

function HeroSection() {
    return (
        <div className='hero-container'> 
           <video src='/videos/video-1.mp4' autoPlay loop muted />
            <h1>Nepali fabric</h1>
            <p>Come Grab it</p>
            <div className="hero-btns">
                <Button className='btns'
                 buttonStyle='btn--outline'
                 buttonSize='btn--large'
                >
                    Get Started
                </Button>
                <Button className='btns'
                 buttonStyle='btn--primary'
                 buttonSize='btn--large'
                >
                    watch fabric <i className="far fa-play-circle"/>
                </Button>
            </div>
        </div>
    )
}

export default HeroSection
