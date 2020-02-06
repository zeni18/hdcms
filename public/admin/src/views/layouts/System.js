import React, { Component } from "react";
import Footer from "../admin/Footer";
import Top from "../admin/Top";
import Navbar from "../admin/Navbar";
import "./css/system.css";
export default WrappedComponent =>
    class SIte extends Component {
        render() {
            return (
                <div className="system">
                    <Top />
                    <Navbar />
                    <div className="wrap">
                        <WrappedComponent {...this.props} />
                    </div>
                    <Footer />
                </div>
            );
        }
    };
