package main

import (
	"fmt"
	"log"
	"net/http"
	"time"
)

func handler(writer http.ResponseWriter, request *http.Request) {
	fmt.Fprintf(writer, "hello, %s!", request.URL.Path[1:])
}

func concurrentHandler(w http.ResponseWriter, r *http.Request) {
	// create a channel to communicate between green threads
	resultChan := make(chan string)

	// call goroutine
	go doSlowTask(resultChan)

	// output to browser
	fmt.Fprintf(w, "<h2>Request received. Processing in background...</h2>")

	// output to server log (console)
	result := <-resultChan
	log.Println("Background task completed:", result)
}

func doSlowTask(resultChan chan string) {
	time.Sleep(3 * time.Second)
	resultChan <- "done!"
}

func main() {
	fmt.Println("Hello, World!")
	http.HandleFunc("/", concurrentHandler)
	http.ListenAndServe(":8080", nil)
}
