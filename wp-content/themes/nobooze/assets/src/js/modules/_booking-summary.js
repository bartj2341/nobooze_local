export class BookingSummary {
    constructor() {
        this.events();
    }

    events() {
        setTimeout(() => {
            const summary = document.querySelector(".usedSlots");

            let observer = new MutationObserver(function() {
                if (summary.hasChildNodes()) {
                    summary.classList.add("hasChildren");
                } else {
                    summary.classList.remove("hasChildren");
                }
            }); 
            
            // Pass in the target node, as well as the observer options.
            observer.observe(summary, {
                childList:     true,
            });
        }, 300);
    }
}