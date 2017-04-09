//
//  ViewController.swift
//  Test
//
//  Created by Dario Adrian Gonzalez on 8/4/17.
//  Copyright © 2017 Dario Adrian Gonzalez. All rights reserved.
//

import UIKit
import WebKit

class ViewController: UIViewController {
    
    var test = "http://159.203.141.73/public/"
    
    var webView: WKWebView?
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // init webView
        webView = WKWebView(frame: view.bounds)
        view.addSubview(webView!)
    }
    
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        // load url
        webView?.loadUrl(string: test)
    }
}

extension WKWebView {
    func loadUrl(string: String) {
        if let url = URL(string: string) {
            load(URLRequest(url: url))
        }
    }
}

