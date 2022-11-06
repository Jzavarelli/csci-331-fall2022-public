import { useState } from "react";

const Counter = (props) => {
    //let countState = 1

    const [countState, setCountState] = useState(1);

    function incCount() {
        //countState++;
        setCountState(countState + props.incBy);
    }

    return (
        <div>
            <div>{countState}</div>
            <button onClick={incCount}>+{props.incBy}</button>
        </div>
    )
}
export default Counter;