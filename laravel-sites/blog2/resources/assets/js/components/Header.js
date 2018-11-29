import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route } from 'react-router-dom';

import Home from './Home';
import About from './About';
import Contact from './Contact'
import Category from './category/Index';

export default class Header extends Component {
    render() {
        return (
            <Router>
                <div> <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
                    <Link to="/" className="navbar-brand">Navbar</Link>
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item">
                                <Link to="/" className="nav-link">Home</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/about" className="nav-link">About</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/contact" className="nav-link">Contact</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="/category" className="nav-link">Category</Link>
                            </li>
                        </ul>

                    </div>
                </nav>


                    <Route exact path='/' component={Home} />
                    <Route exact path='/about' component={About} />
                    <Route exact path='/contact' component={Contact} />
                    <Route exact path='/category' component={Category} />


                </div>
            </Router>
        );
    }
}

