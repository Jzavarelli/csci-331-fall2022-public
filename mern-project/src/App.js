import Counter from "./components/Counter";
import MyGitHub from "./components/MyGitHub";
//import './App.css';

function App() {
  return (
    <div className="App">

      <h1>
        Hello React!
      </h1>
      <h2>
        Jace Zavarelli - n76t836
      </h2>

      <hr />
      <br />
      <Counter incBy={1} />
      <br />
      <hr />
      <br />
      <Counter incBy={2} />
      <br />
      <hr />
      <br />
      <MyGitHub />
      <br />
      <hr />

    </div>
  );
}

export default App;
